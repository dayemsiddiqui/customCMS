{{--<a href="#modalEmg" role="button" class="btn" data-toggle="modal"></a>--}}

<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
        <h4 class="modal-title" id="myModalLabel">Warning!</h4>
      </div>
      <div class="modal-body">
        <h2>You are about to delete. Are you sure you want to proceed?</h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="yesDelete">Yes</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>
  </div>
</div>


@if(Session::has('alert'))
      <div id="gritter-notice-wrapper"><div id="gritter-item-1" class="gritter-item-wrapper my-sticky-class"><div class="gritter-top"></div><div class="gritter-item"><div class="gritter-close" style="display: none;"></div><img src="{{asset('assets/img/ui-sam.jpg')}}" class="gritter-image"><div class="gritter-with-image"><span class="gritter-title">Notification!</span><p>
      {{session('alert')}}
      </p></div><div style="clear:both"></div></div><div class="gritter-bottom"></div></div></div>
  @endif
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.ui.touch-punch.min.js')}}"></script>
    <script class="include" type="text/javascript" src="{{asset('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/tinymce/tinymce.min.js')}}"></script>
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.min.css" rel="stylesheet" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/js/gritter/js/jquery.gritter.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/gritter-conf.js')}}"></script>
    <!--common script for all pages-->
    <script src="{{asset('assets/js/common-scripts.js')}}"></script>

    <!--script for this page-->

  <script>
      //custom select box

      $(function(){

            tinymce.init({
                  selector: "#mytextarea",
                  plugins: 'image link paste textcolor autoresize',
                  menubar: false,
                  paste_as_text: false,
                  forced_root_block: false,
                  force_p_newlines: false,
                  toolbar: 'undo redo | styleselect | bold italic underline |  fontselect fontsizeselect | forecolor backcolor | link unlink ',
                  statusbar: false
              });

              $(".multiple").select2({
                  tags: true,
                  tokenSeparators: [',', ' ']
                  });

//                $(".btn-danger").click(function(e){
//                    var form = $(this).parents('form:first');
//                    $('#confirmation').modal();
//                    // e.preventDefault();
//                });



                 $('form').submit(function(e) {
                 if($(this).find("input.form-control").val() == ""){
                  alert("Please fill the text field");
                  e.preventDefault();
                 }
                  if($(this).find('.btn').length != 0)
                     {
                         if($(this).find("select").val().indexOf("Select") != -1){
                           alert("Please select an appropriate value from the list");
                           e.preventDefault();
                           return;
                          }
                     }
                   if($(this).find("input:checkbox:checked").length == 0){
                        alert("Please select atleast on checkbox for availability");
                        e.preventDefault();
                        return;
                   }

                 if($(this).find('.btn-danger').length != 0)
                {
                    return confirm("Are you sure you want to delete this?");
                }

                });





             // $('select.styled').customSelect();
      });

  </script>

  @if(Session::has('alert'))
          <script>
                     var unique_id = $.gritter.add({
                                // (string | mandatory) the heading of the notification
                                title: 'Notification!',
                                // (string | mandatory) the text inside the notification
                                text: '{{session('alert')}}',
                                // (string | optional) the image to display on the left
                                image: '{{asset('assets/img/ui-sam.jpg')}}',
                                // (bool | optional) if you want it to fade out on its own or just sit there
                                sticky: true,
                                // (int | optional) the time you want it to be alive for before fading out
                                time: '',
                                // (string | optional) the class name you want to apply to that specific message
                                class_name: 'my-sticky-class'
                            });

            </script>
  @endif

  </body>
</html>
