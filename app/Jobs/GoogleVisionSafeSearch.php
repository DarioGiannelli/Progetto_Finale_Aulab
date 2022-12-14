<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Google\Cloud\Vision\V1\ImageAnnotatorClient;

class GoogleVisionSafeSearch implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $product_image_id;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($product_image_id)
    {
        $this->product_image_id = $product_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i=Image::find($this->product_image_id);
        if(!$i){
            return;
        }

        $image=file_get_contents(storage_path('/app/public/' . $i->path));


        putenv('GOOGLE_APPLICATION_CREDENTIALS=' .base_path('google_credentials.json'));


        $imageAnnotator = new ImageAnnotatorClient();
        $response = $imageAnnotator->safeSearchDetection($image);
        $imageAnnotator->close();

        $safe=$response->getSafeSearchAnnotation();

        $adult=$safe->getAdult();
        $spoof=$safe->getSpoof();
        $medical=$safe->getMedical();
        $violence=$safe->getViolence();
        $racy=$safe->getRacy();


            $likelihoodName=[
                    'text-secondary fas fa-circle',
                    'text-success fas fa-circle',
                    'text-success fas fa-circle',
                    'text-warning fas fa-circle',
                    'text-warning fas fa-circle',
                    'text-danger fas fa-circle',
            ];

        
        $i->adult = $likelihoodName[$adult];
        $i->spoof = $likelihoodName[$spoof];
        $i->medical = $likelihoodName[$medical];
        $i->violence = $likelihoodName[$violence];
        $i->racy = $likelihoodName[$racy];

        $i->save();




    
}
}
