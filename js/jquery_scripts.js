$( function() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 400,
      modal: true,
      buttons: {
        "OK": function() {
          $( this ).dialog( "close" );
        },
      }
    });
  } );

