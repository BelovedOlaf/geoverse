<?php

namespace App\Http\Controllers\Registration;


use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use Google\Cloud\BigQuery\BigQueryClient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RegistrationController extends Controller
{

  public function volunteer()
  {
    return view('registration.volunteer_register');
  }


  public function driver()
  {
    return view('registration.driver_register');
  }


  public function organization()
  {
    return view('registration.organization_register');
  }

  public function insert(Request $request)
  {
    $org_name = $request->input('org_name');
    $contact_fullname = $request->input('contact_fullname');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $mobile = $request->input('mobile');
    $no_of_recipient = $request->input('no_of_recipient');
    $recipient_id = $request->input('recipient_id');
    $status = $request->input('status');
    $data = array('org_name' => $org_name, "contact_fullname" => $contact_fullname, "email" => $email, "phone" => $phone, 'mobile' => $mobile, "no_of_recipient" => $no_of_recipient, "recipient_id" => $recipient_id, "status" => $status);
    DB::table('organization_registration')->insert($data);
    echo "Record inserted successfully.<br/>";
  }

  public function volunteer_register(Request $request)
  {
    $input = $request->all();

    $bigQuery = new BigQueryClient([
      'keyFilePath' => __DIR__ . '/../../../../bbds-401119-e2a52190d13a.json',
    ]);

    $dataset = $bigQuery->dataset('bbds23');
    $table = $dataset->table('volunteer_registration');

    $record = [
      'email' => $input['email'],
      'first_name' => $input['first_name'],
      'last_name' => $input['surename'],
      'mobile' => intval($input['mobile']),
      'submision_id' => (string) Str::uuid(),
      'unique_token' => (string) Str::uuid(),
      'is_driving' => isset($input['is_driving']) ? intval($input['is_driving']) : 0,
      'car_registration' => isset($input['car_registration']) ? $input['car_registration'] : "",
      'is_ULEZ' => isset($input['is_ULEZ']) ? intval($input['is_ULEZ']) : 0,
      'is_delivering_basket' => isset($input['is_delivering_basket']) ? intval($input['is_delivering_basket']) : 0,
      'have_delivered' => isset($input['have_delivered']) ? intval($input['have_delivered']) : 0,
      'basket_count' => 0,
      'basket_amount' => 0,
      'gift_aid' => 0,
      'home_add' => isset($input['home_add']) ? $input['home_add'] : '',
      'post_code' => isset($input['post_code']) ? $input['post_code'] : '',
      'deliver_more' => 0,
      'delivery_choice' => "",
      'delivery_choice1' => "",
      'delivery_choice2' => "",
      'delivery_choice3' => "",
      'venue' => "",
      'payment_status' => "",
      'payment_transaction' => "",
      'payment_method' => "",
      'status' => 0,
    ];

    $resInsert =  $table->insertRows([
      ['data' => $record],
    ]);

    if ($resInsert->isSuccessful())
      echo "Successfully registered!";
    else {
      echo "Registeration failed!";
      foreach ($resInsert->failedRows() as $row) {
        echo json_encode($row);
      }
    }
  }
}
