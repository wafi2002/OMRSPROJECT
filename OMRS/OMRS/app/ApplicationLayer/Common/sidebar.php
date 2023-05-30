<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SideBar Panel</title>

<style>




.menu-box{
    position: absolute;
    margin-left: 190px;
    margin-top: 250px;
    background-color:rgba(255, 255, 255, 0.5);
    border: 1px solid black;
    box-sizing:border-box;
    width: 265px;
    height: 640px;
    padding: 10px;
    border-radius: 10px;
}

.menu{
  
    border: 1px solid black;
    box-sizing:border-box;
    width: 240px;
    height: 620px;
    border-radius: 5px;
}



.menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-item-head{
  display: inline-block;
  position: relative;
  margin-right: 20px;
  cursor: pointer;
}

.menu-item {
  position: relative;
  margin-right: 20px;
  cursor: pointer;
}

.sub-menu li {
  margin-bottom: 5px;
}

.menu-item:hover > .sub-menu {
  opacity: 1;
  visibility: visible;
}

.line {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 0;
  height: 2px;
  background-color: blue;
  transition: width 0.3s ease;
}

.menu-item:hover .line,
.menu-item.active .line {
  width: 100%;
}

nav ol li {
  list-style-type: none;
  padding-top: 10px;
}

a {
  color: black;
  text-decoration: none;
}

#li #a::after {
  content: '';
  width: 0;
  height: 3px;
  background-color: black;
  display: block;
  transition: width 0.3s linear;
}

#li #a:hover::after {
  width: 100%;
}


.Profile{
    position: absolute;
    border: 1px solid black;
    border-radius: 5px;
    background-color: #f2f2f2;
    width: 265px;
    height: 70px;
    margin-left: 190px;
    margin-top: 160px;
  }
  
  .profileicon{
    padding-left: 10px;
    width: 50px;
    height: 50px;
    padding-top: 10px;
  }

.profilename{
  margin-top: -75px;
  margin-left: 70px;
}

.profile-name{
  display: inline-block;
}

.profileid{
  margin-top: -75px;
  margin-left: 70px;
}

.profile-id{
  display: inline-block;
}

.profile{
  margin-top: 30px;
}

.menu-module{
  list-style-type:disc;
}

.sub-menu .menu-item{
  font-size: 15px;
}
</style>


</head>
<body>
    <!-- Profile Box -->
<div class="Profile">
        <img src="../../Asset/icon.png" alt="" class="profileicon">

        <div class="profile">
            <div class="profilename">
                <p class="profile-name">Name : </p><p class="profile-name">Alex</p>
            </div>
            <div class="profileid">
                <p class="profile-id">ID : </p><p class="profile-id">0202541230</p>
            </div>
        </div>
        
    </div>


    <!-- Sidebar Panel -->
<div class="menu-box">
        <nav class="menu">
            <ol>
                <li class="menu-item-head" id="li"><a href="#0" id="a">Home</a></li>
                <li class="menu-item-head" id="li"><a href="#0" id="a">About</a></li>
                <li class="menu-item-head" id="li"><a href="#0" id="a">Profile</a></li>
                <li class="menu-item">
                    <li class="menu-module">Permohonan Kursus <br>Perkahwinan</li>
                    <ol class="sub-menu">
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="Maklumat-Pemohon">Maklumat Pemohon</a></li>
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="Status-Permohonan">Status Permohonan</a></li>
                    </ol>
                </li>
                <li class="menu-item">
                    <li class="menu-module">Permohonan Perkahwinan</li>
                    <ol class="sub-menu">
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="Maklumat-Perkahwinan">Maklumat Perkahwinan</a></li>
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="Dokumen-Sokongan">Dokumen Sokongan</a></li>
                    </ol>
                </li>
                <li class="menu-item">
                    <li class="menu-module">Pendaftaran Perkahwinan</li>
                    <ol class="sub-menu">
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="Maklumat-Pemohon">Jenis Perkahwinan</a></li>
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="Status-Permohonan">Sijil & Kad Perkahwinan</a></li>
                    </ol>
                </li>
                <li class="menu-module" id="li"><a href="#0" id="a">Khidmat Nasihat</a></li>
                <li class="menu-item has-submenu">
                    <li  class="menu-module">Insentif</li>
                    <ol class="sub-menu">
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="syarat-kelayakan">Syarat Kelayakan</a></li>
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="mohon">Mohon</a></li>
                        <li class="menu-item" id="li"><a  id="a" href="#0" class="submenu-link" data-content="result">Result</a></li>
                    </ol>
                </li>
            </ol>
        </nav>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
  // Get the submenu links
  const submenuLinks = document.querySelectorAll('.submenu-link');

  // Get all content items
  const contentItems = document.querySelectorAll('.content-item');

  // Hide all content items
  contentItems.forEach(item => {
    item.style.display = 'none';
  });

  // Add click event listener to each submenu link
  submenuLinks.forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();

      // Get the content to be displayed
      const contentId = link.getAttribute('data-content');
      const content = document.getElementById(contentId);

      // Hide all content items
      contentItems.forEach(item => {
        item.style.display = 'none';
      });

      // Display the selected content
      content.style.display = 'block';
    });
  });

  const nextButton = document.querySelector('.next');
  const backButton = document.querySelector('.back');
  const applyForms = document.querySelectorAll('.applyform');

  let currentIndex = 0;

  applyForms[currentIndex].classList.add('hover');

  nextButton.addEventListener('click', () => {
    applyForms[currentIndex].classList.remove('hover');
    currentIndex = (currentIndex + 1) % applyForms.length;
    applyForms[currentIndex].classList.add('hover');

    if (currentIndex === 3) {
      nextButton.disabled = true;  // Disable the "Next" button when reaching the last item
    }

    backButton.disabled = false;  // Enable the "Back" button when clicking "Next"
  });

  backButton.addEventListener('click', () => {
    applyForms[currentIndex].classList.remove('hover');
    currentIndex = (currentIndex - 1 + applyForms.length) % applyForms.length;
    applyForms[currentIndex].classList.add('hover');

    if (currentIndex === 0) {
      backButton.disabled = true;  // Disable the "Back" button when reaching the first item
    }

    nextButton.disabled = false;  // Enable the "Next" button when clicking "Back"
  });

});




    </script>
</body>
</html>