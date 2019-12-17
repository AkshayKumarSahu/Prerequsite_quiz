
<!doctype html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="../ckeditor_4.13.0_full/ckeditor/ckeditor.js"></script>

  </head>

  <body>

    <br><br><br><br><br><br>
          <div class="container rcorners2">
            <!--table class="table table-striped"-->
    
                <form method="POST" action="add_quiz.php">
                    <div class="form-group">
                        <label for="text">Questions</label>
                        <textarea name="qus">
                          
                        
                        </textarea> 

                        <!--input type="text" class="form-control" name="qus" placeholder="Enter question"-->
                    </div>

                    <div class="form-group">
                        <label for="text">Option1</label>
                        <textarea name="op1">
                          
                        </textarea>
                        <!--input type="text" class="form-control" name="op1" placeholder="opt1"-->
                         
                    </div>

                    <div class="form-group">
                        <label for="text">Option2</label>
                        <textarea name="op2">
                          
                        </textarea>
                        <!--input type="text" class="form-control" name="op2" placeholder="opt2"-->
                    </div>

                    <div class="form-group">
                        <label for="text">Option3</label>
                        <textarea name="op3">
                          
                        </textarea>
                        <!--input type="text" class="form-control" name="op3" placeholder="opt3"-->
                    </div>

                    <div class="form-group">
                        <label for="text">Option4</label>
                        <textarea name="op4">
                          
                        </textarea>

                        <!--nput type="text" class="form-control" name="op4" placeholder="opt4"-->
                    </div>

                    <div class="form-group">
                        <label for="text">Answer</label>
                        <textarea name="ans">
                          
                        </textarea>
                        <!--input type="text" class="form-control" name="ans" placeholder="right answer"-->
                    </div>

                    <center><button type="submit" class="btn btn-default">Submit</button></center>

                </form>
            <!--/table-->
          </div>
        </div>
      </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
  </body>


  <script>
  CKEDITOR.inline('qus');
  CKEDITOR.inline('op1');
  CKEDITOR.inline('op2');
  CKEDITOR.inline('op3');
  CKEDITOR.inline('op4');
  CKEDITOR.inline('ans');
</script>


</html>
