<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskAmoCrm</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
<h1>CONTACTS</h1>
<table border =  "1" cellpadding = "15" cellspacing = "0" >
  <thead>
    <tr>
      <th>Contact Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Responsible User Id</th>
      <th>Group Id</th>
      <th>Created by</th>
      <th>Updated by</th>
      <th>Closest task at</th>
      <th>Custom fields values</th>
      <th>Account Id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
      <tr>
        <td>{{ $contact->contact_id }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->phone }}</td>
        <td>{{ $contact->first_name }}</td>
        <td>{{ $contact->last_name }}</td>
        <td>{{ $contact->responsible_user_id }}</td>
        <td>{{ $contact->group_id }}</td>
        <td>{{ $contact->created_by }}</td>
        <td>{{ $contact->updated_by }}</td>
        <td>{{ $contact->closest_task_at }}</td>
        <td>{{ $contact->custom_fields_values }}</td>
        <td>{{ $contact->account_id }}</td>

      </tr>
    @endforeach
  </tbody>
</table>   

    


</body>
</html>