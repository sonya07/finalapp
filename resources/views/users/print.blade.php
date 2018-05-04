<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered">
      <tr>
        <td>
          User Name
        </td>
        <td>
          Email
        </td>
      </tr>
      @foreach($users as $user)
      <tr>
        <td>
            {{ $user->name }}
        </td>
        <td>
            {{ $user->email }}
        </td>
      </tr>
      @endforeach
    </table>
  </body>
</html>