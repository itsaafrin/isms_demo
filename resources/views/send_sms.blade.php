<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel 4.3 Validation Demo With ISMS Integration</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <h1 class="text-center">
                Laravel 4.3 Validation Demo With ISMS Package Integration
            </h1>
            <div class="well">
                @if($errors->all())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{ $error }}
                </div>
                @endforeach
                @endif

                @if(isset($success))
                <div>
                    <p class="alert alert-success">{{$success}}</p>
                </div>
                @endif

                <form accept-charset="UTF-8" action="" method="post">
                    <div class="form-group">
                        <label  class="control-label">
                            Mobile Number: 
                        </label>    
                        <input name="message_recipient" type="text" class="form-control" placeholder="E.G: 0161231122">
                        
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Message: 
                        </label>    
                        <textarea name="message_content" class="form-control" placeholder="Some Message Here"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="control-label">
                            Type: 
                        </label>    
                        <select name="message_type" class="form-control">
                            <option value="">Message Type</option>
                            <option value="1">ASCII</option>
                            <option value="2">UNICODE</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Send SMS</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
        <p class="copyright text-muted text-center">Copyright &copy; 2014</p>
    </body>
</html>