<!DOCTYPE html>
<html>
  <body>
    <table>
      <thead>
        <th>Email</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th></th>
      </thead>
      <tbody>
        @foreach ($data as $record)
          <tr>
            <td>{{ $record['email'] }}</td>
            <td>{{ $record['first_name'] }}</td>
            <td>{{ $record['last_name'] }}</td>
            <td>{{ $record['submision_id'] }}</td>            
            <td>{{ $record['unique_token'] }}</td>
            <td>{{ $record['is_driving'] }}</td>
            <td>{{ $record['car_registration'] }}</td>
            <td>{{ $record['is_ULEZ'] }}</td>
            <td>{{ $record['is_delivering_basket'] }}</td>
            <td>{{ $record['have_delivered'] }}</td>
            <td>{{ $record['basket_count'] }}</td>
            <td>{{ $record['basket_amount'] }}</td>
            <td>{{ $record['gift_aid'] }}</td>
            <td>{{ $record['home_add'] }}</td>
            <td>{{ $record['post_code'] }}</td>
            <td>{{ $record['deliver_more'] }}</td>
            <td>{{ $record['delivery_choice'] }}</td>
            <td>{{ $record['delivery_choice1'] }}</td>
            <td>{{ $record['delivery_choice2'] }}</td>
            <td>{{ $record['delivery_choice3'] }}</td>
            <td>{{ $record['venue'] }}</td>
            <td>{{ $record['payment_status'] }}</td>
            <td>{{ $record['payment_transaction'] }}</td>
            <td>{{ $record['payment_method'] }}</td>
            <td>{{ $record['status'] }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>