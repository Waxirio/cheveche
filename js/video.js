function go(){
  event.preventDefault();
  photo.style.display='block';
}

const photo=document.getElementById('video');
const boutton=document.getElementById('takevideo');

boutton.addEventListener('click', go, false);
