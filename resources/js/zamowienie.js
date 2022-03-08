import swal from 'sweetalert';
   
   $('.FakturaWlacz').hide()
    $('.ParagonWlacz').hide();

    $('.paragon').change(function () {
        if (this.checked) {
           $('.ParagonWlacz').fadeIn('slow');
           $('.FakturaWlacz').fadeOut('slow');
          }
    });

    $('.faktura').change(function () {
        if (this.checked) {
           $('.FakturaWlacz').fadeIn('slow');
           $('.ParagonWlacz').fadeOut('slow');
        }
    });

    $('.delete').click(function(){
        event.preventDefault();
        var form = event.target.form;
        var id = $(this).attr('data-id');
        swal({
          title: "Czy jesteś pewien?",
          text: "Anulowania zamówienia o identyfikatorze: "+id+"",
          icon: "warning",
          buttons: true,
          dangerMode: true,
          buttons: ["Nie", "Tak"],
          })
          .then((willDelete) => {
            if (willDelete) {
            
              swal("Poprawnie anulowano zamówienie!", {
                icon: "success",
              });
      
              form.submit();
            } else {
              swal("Przerwano anulowanie zamówienia");
            }
          });
      });
      