<?php
namespace App\Http\Controllers\api;

  use App\Http\Controllers\Controller;
  use App\Models\User;
  use Illuminate\Http\Request;

  use Illuminate\Support\Facades\Hash;
  use Illuminate\Support\Facades\Validator;

  class RegistrationController extends Controller
  {
      /**
       * Display a listing of the resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function index()
      {
          //
      }

      /**
       * Show the form for creating a new resource.
       *
       * @return \Illuminate\Http\Response
       */
      public function create()
      {
          //
      }

      /**
       * Store a newly created resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @return \Illuminate\Http\Response
       */
      public function store(Request $request)
      {
  $header=$request->header('Authorization');
  if(empty($header)){

    return response(['result' => false,'message'=>'API requested without authorization header!']);
  }else if(!$header='Bearer 079fe65c295bae8e815012ee090728fe3914a419b2d8c0b0b03d466c088e79af'){

    return response(['result' => false,'message'=>'API requested  authorization header invalid!']);
  }


      $data = $request->validate([
          'tel' => 'required',
          'password' => 'required'
        ]);

          $tel=$request['tel'];
          $country_code='+251';
          $tel = preg_replace("/^\+?{$country_code}/", '0',$tel);

          $name=$request['name'] ? $request['name'] : $tel;
          $email=$request['email'] ? $request['email'] : $tel.'@esevicess.com';

          $password=$request['password'];;


    $user = new User();
  try{

            $user->name =$name;
              $user->tel = $tel;
              $user->email =$email;
              $user->password =Hash::make($password);


  if($user->save()){
        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['result'=>true, 'message'=>'User Registerd Succusfully', 'user' => $user, 'pin'=>$password,
          'access_token' =>
          $accessToken], 201);


  }else{
    return response(['result' => false,'message'=>'User Not Registerd ']);
  }

  }catch (\Exception $ex){
  return response()->json([
              'message' => $ex->getMessage(),
              'result'  => false
          ]);
  }



  }
      public function verify(Request $request){


      }

      /**
       * Display the specified resource.
       *
       * @param  \App\Models\User  $user
       * @return \Illuminate\Http\Response
       */
      public function show(User $user)
      {
          //
      }

      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Models\User  $user
       * @return \Illuminate\Http\Response
       */
      public function edit(User $user)
      {
          //
      }

      /**
       * Update the specified resource in storage.
       *
       * @param  \Illuminate\Http\Request  $request
       * @param  \App\Models\User  $user
       * @return \Illuminate\Http\Response
       */
      public function update(Request $request, User $user)
      {
          //
      }


      public function destroy(Request $request)
      {
        $header=$request->header('Authorization');
        if(empty($header)){

          return response(['result' => false,'message'=>'API requested without authorization header!']);
        }else if(!$header='Bearer 079fe65c295bae8e815012ee090728fe3914a419b2d8c0b0b03d466c088e79af'){

          return response(['result' => false,'message'=>'API requested  authorization header invalid!']);
        }


            $data = $request->validate([
                'tel' => 'required',
                ]);
        $tel=$request->get('tel');

          $country_code='+251';
          $tel = preg_replace("/^\+?{$country_code}/", '0',$tel);

                    // Get user record
                        $user = User::where('tel',$tel)->first();



                        // Check Condition Mobile No. Found or Not
                        if(!$user) {
                // Get user record
                        $user = User::where('email', $tel)->first();
                if(!$user) {

                            return response()->json([
                                        'message' => 'Phone Number not found in our database',
                                        'result'  => false
                                    ]); }
                        }


        $user->delete();

  return response()->json([
              'message' => 'User Removed from Our Database',
              'result'  => true
          ]);
      }
  }
