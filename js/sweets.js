function alertmsj(tit,msj,icon){
  Swal.fire({
    title: tit,
    text: msj,
    icon: icon,
    allowOutsideClick: false,
    confirmButtonText: "Ok",
    confirmButtonColor: "#D4AC0D"
  });
}

function alertmsjT(tit,msj,icon){
  Swal.fire({
    title: tit,
    text: msj,
    icon: icon,
    allowOutsideClick: false,
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
  });
}



function SWEET(r){
  var rt = JSON.parse(r);

  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true,
    onBeforeOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer),
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

  Toast.fire({
    icon: rt[1],
    title: rt[0]
  });

}

function ERR(r){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    onBeforeOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

  Toast.fire({
    icon: 'error',
    title: 'Lo sentimos hubo un error'
  });
}

function LG (){
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    onBeforeOpen: () => {
        Swal.showLoading()
    }
  });
  Toast.fire({
    title: 'Cargando...'
  });
}
