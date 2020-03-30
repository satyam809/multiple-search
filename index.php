<!DOCTYPE html>
<html>
    <head>
        <title>AutoComplete Textbox with Multiple Field using jQuery in PHP</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/css/bootstrap-tokenfield.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>
    </head>
    <body>
        <div class="container">
            
            <div class="row">
                
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Enter Multiple Country Name</label>
                        <div class="input-group">
                            <input type="text" id="search_data" placeholder="" autocomplete="off" class="form-control input-lg" />
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-primary btn-lg" id="search">Get Value</button>
                            </div>
                        </div>
                        <br />
                        <span id="country_name"></span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
  $(document).ready(function(){
      
    $('#search_data').tokenfield({
        autocomplete :{
            source: function(request, response)
            {
                jQuery.get('fetch.php', {
                    query : request.term
                }, function(data){
                    data = JSON.parse(data);
                    response(data);
                });
            },
            delay: 100
        }
    });

    $('#search').click(function(){
        $('#service_name').text($('#search_data').val());
    });

  });
</script>

