<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <table>
        <tr>
            <td>Dear , <b>{{ $name }}!</b></td>
        </tr>
        <tr>
            <td>Please click on below link to activate your account:  </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td> <a class="btn btn-success" href="{{url('confirm/'.$code)}}">Confirm Account</a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Thanks & Regards,</td>
        </tr>
        <tr>
            <td>Md. Shahriar Karim Shawon</td>
        </tr>
    </table>
</body>
</html>