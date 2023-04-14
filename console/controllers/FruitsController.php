<?php
namespace console\controllers;


use yii\console\Controller;
use Yii;

class FruitsController extends Controller
{
	public function actionFetch()
    {
        $curl = curl_init();
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => 'https://fruityvice.com/api/fruit/all',
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => '',
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => 'GET',
		));
		
		$response = curl_exec($curl);
		$rows=json_decode($response);
		foreach($rows as $row){
			
			$model = \common\models\Fruits::find()->where(['fruit_id'=>$row->id])->one();
			if(!$model){
				
				$model=new \common\models\Fruits;
				$model->fruit_id=$row->id;
				$model->name=$row->name;
				$model->family=$row->family;
				$model->order=$row->order;
				$model->genus=$row->genus;
				$model->nut_calories=$row->nutritions->calories;
				$model->nut_fat=$row->nutritions->fat;
				$model->nut_sugar=$row->nutritions->sugar;
				$model->nut_carbohydrates=$row->nutritions->carbohydrates;
				$model->nut_protein=$row->nutritions->protein;
				$model->save(false);
			}					
		}		
		curl_close($curl);
		Yii::$app->mailer->compose() ->setFrom('admin@gmail.com') ->setTo('nipu20@gmail.com') ->setSubject('Fruits Data imported') ->setTextBody('Hello there! we have successfully imported Fruits data inti mysql database')->send();
		
		
    }
   
}
