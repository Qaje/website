<?php 
//namespace Turismo\Website;
 
 use Turismo\Website\Models\Website;

 Route::get('api/populate',function(){

    $faker = Faker\Factory::create();

    for($i = 0 ; $i < 20 ; $i++){

        Website::create([
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'description' => $faker->text($maxNbChars = 200),
            'status' => $faker->boolean($chanceOfGettingTrue = 50),
            'created_ad' => $faker->date($format = 'Y-m-d H:i:s',$max = 'now')    
        ]);

    }
    return "Websites created!!!";
 });


 Route::get('api/todos', function(){
  
    $websites = Website::all();
    return $websites;
 
});