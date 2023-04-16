<?php
namespace app\controllers;
use Yii;
use app\models\student;
use yii\web\Controller;

class StudentController extends Controller
{
    public function actionCreate()
    {
        $model =new Student;
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->save();
            Yii::$app->session->setFlash('success','you have entered correct details');
            return $this->redirect('index');
        }
        return $this->render('create',['model'=>$model]);

    }

    
    public function actionIndex()
    {
        $user=Student::find()->all();
        return $this->render('index',['user'=>$user]);

    }


    
    public function actionView($uid)
    {
        $user=Student::findOne($uid);
return $this->render('view',['user'=>$user]);
    }
    public function actionEdit($uid)
    {

$model=Student::findOne($uid);
if($model->load(Yii::$app->request->post()) && $model->validate()){
    $model->save();
    Yii::$app->session->setFlash('success','user edited successfully');
    return $this->redirect('index');

}
return $this->render('edit',['model'=>$model]);

    }

    public function actionDel($uid){
        $user=Student::findOne($uid);
        if($user){
            $user->delete();
            
            Yii::$app->session->setFlash('success','user deleted!');
            return  $this->redirect('index');
        }
        Yii::$app->session->setFlash('success','user not found');
    }
 public function actionTemplate()
{
    return $this->render('template');
}

    
}