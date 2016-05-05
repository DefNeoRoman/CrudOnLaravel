<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Request;
use Form;
use DB;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = DB::table('news')->get();

      
        return view('indexNews', ['news' => $news]);
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo Form::open(['route'=>'test.store']);
        
        return view('insertNews');
        
         echo Form::close();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

 
   

    if(isset($_POST['send'])) {

        $headline = isset($_POST['headline']) ? $_POST['headline'] : NULL;

        $email = isset($_POST['email']) ? $_POST['email'] : NULL;

        $name = isset($_POST['name']) ? $_POST['name'] : NULL;

        $phone = isset($_POST['phone']) ? $_POST['phone'] : NULL;

        $category = isset($_POST['category']) ? $_POST['category'] : NULL;

        $description = isset($_POST['description']) ? $_POST['description'] : NULL;

        $city = isset($_POST['city']) ? $_POST['city'] : NULL;

        $price = isset($_POST['price']) ? $_POST['price'] : NULL;

        $photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;

    DB::table('news')->insert(
        ['headline' => $headline,
         'email' => $email,
         'name' => $name,
         'phone' => $phone,
         'category' => $category,
         'city' => $description,
         'description' => $city,
         'price' => $price,
         'photo' => $photo,
         ]);
           
        echo 'Через 1 сек. вы будете перенаправлены на новую страницу.';
          header('Refresh: 1; URL=http://crudonlaravel/test');
        }

        else {

            echo 'Не получилось';
        }

    


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       
        if(isset($_POST['save'])) {

        $headline = isset($_POST['headline']) ? $_POST['headline'] : NULL;

        $email = isset($_POST['email']) ? $_POST['email'] : NULL;

        $name = isset($_POST['name']) ? $_POST['name'] : NULL;

        $phone = isset($_POST['phone']) ? $_POST['phone'] : NULL;

        $category = isset($_POST['category']) ? $_POST['category'] : NULL;

        $description = isset($_POST['description']) ? $_POST['description'] : NULL;

        $city = isset($_POST['city']) ? $_POST['city'] : NULL;

        $price = isset($_POST['price']) ? $_POST['price'] : NULL;

        $photo = isset($_POST['photo']) ? $_POST['photo'] : NULL;

        $aVar = mysqli_connect('localhost','root','1','autoshop');

        mysqli_query($aVar, "UPDATE news SET 
headline='$headline', email='$email', name='$name', phone='$phone', category='$category', description='$description', city='$city', price='$price', photo='$photo'   

            WHERE id='$id'");

       

       echo "мы прибыли";
       echo 'Через 1 сек. вы будете перенаправлены на новую страницу.';
          header('Refresh: 1; URL=http://crudonlaravel/test');
            
        }

        else {

         $edit = DB::table('news')->where('id', $id)->get();

         return view('SelfyNews', ['news' => $edit]);
        }

        
       
        }

      
            

         
    
              
        

       

        

        


    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
        echo 'удача';
       

            
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = $_GET['id'];

        $aVar = mysqli_connect('localhost','root','1','autoshop');

        mysqli_query($aVar, "DELETE FROM news WHERE id='$id'");
        
        echo 'удалено';
         echo 'Через 1 сек. вы будете перенаправлены на новую страницу.';
          header('Refresh: 1; URL=http://crudonlaravel/test');
    }
}
