<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        input[type=text], input[type=password] {
            padding: 12px 20px;
            margin: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.9;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            margin-left: 39%;
            margin-top: 16%;
        }
</style>
</head>
<body>
    <?=$this->session->flashdata('message');?>
    <form method="post" action="<?=base_url('login/cekLogin')?>">
        <table>
            <tr>
                <td align="center" colspan="2"><h3>Enter Login Detail</h3></td>
            </tr>
            <tr>
                <td align="right"> <h4>Username</h4> </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td align="right"> <h4>Password</h4> </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td align="center" colspan="2">
                    <button type="submit" name="login">Submit</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>