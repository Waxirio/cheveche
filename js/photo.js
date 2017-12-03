function go(){
  event.preventDefault();
  photo.style.display='block';
}

const photo=document.getElementById('photo');
const boutton=document.getElementById('takephoto');

boutton.addEventListener('click', go, false);
