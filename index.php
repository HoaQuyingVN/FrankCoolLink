<!DOCTYPE html>
<html>

<?php require_once "header.php"; ?>
<body>

  

  <h1 class="text-center text-3xl font-bold mt-8">
    Sakura's House
  </h1>
  <p class="text-center text-gray-600 mt-2">
    Hello there, welcome to the official website of the Sakura's House!<br/>
    I've been working on this website for a while now, so I hope you enjoy it!
  </p>
  <h3 class="text-center text-2xl font-bold mt-8">About Me/Friends</h3>
  <div class="flex justify-center mt-4">
    <div class="w-1/2">
      <img src="https://i.gifer.com/3azo.gif" alt="Sakura" class="mx-auto rounded-full">
      <b class="text-center text-xl font-bold mt-4">Sakura</b>
      <p class="text-center text-gray-600 mt-2">
        I'm a 27-year-old girl who loves to Doraemon and Anime. I'm also a CEO of a fanpage, which is called "Sakura hay Remux Lam" and I'm the owner of it.!, I'm also a member of the Saturday Family of VTuber, which is a group of VTubers who are all from Asia
      </p>
    </div>
    <div class="w-1/2">
      <img src="https://animesher.com/orig/1/133/1333/13333/animesher.com_wind-free-cherry-blossom-1333366.gif" alt="Miya" class="mx-auto rounded-full">
      <b class="text-center text-xl font-bold mt-4">Miya</b>
      <p class="text-center text-gray-600 mt-2">
        Hi!, I'm Miya, I'm a VTuber and I'm also a friend of Sakura. I'm also a member of the Saturday Family of VTuber, which is a group of VTubers who are all from Asia and We and bSide Team can add in the future., "See you torromow in the Sakura's House Live!".
      </p>
    </div>
  </div>
  <h1 class="text-center text-2xl font-bold mt-8">Sakura's Client Portal</h1>
  <p class="text-center text-gray-600 mt-2">
    (Only developers) I've made a client portal for my clients, which is called "Sakura's Client Portal". It's a website that allows you can connect with service and clients, and it's also a website that allows you to connect with SakuraPay(a payment service that allows you to pay for services and clients)
<br>
    <a href="/portal" class="text-center text-xl font-bold mt-4">Sakura's Client Portal &rarr;</a>
  </p>
  <footer class="bg-gray-800 text-white py-8">
    Web-based by bSide Team & Build by bSide Team
      </footer> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->

    <script>
    function loginCallback(){
      window.location.href = "/cakesy/login.php";
      if (window.location.href.includes("?")){
        alert("[CAKESY-AWS:ERROR] AWS cannot find the client's information, they will not be able to login to the client portal.");
      }
    }
    function update() {
      setTimeout(()=>{
      fetch('/notification.json')
          .then(res => res.json())
          .then(res =>{
            if(res.mail.length > 0){
                    document.getElementById('notifications').innerHTML = res.mail.map(item => `
              <div class="flex items-center">
                <h2 class="text-xl font-bold text-gray-800">${item.title}</h2>
                <a href="${item.link}" class="text-gray-600 hover:text-gray-800 ml-2">Open! &rarr;</a>
              </div>
                            `).join('<br>');
            } else {
              document.getElementById('notifications').innerHTML = `<b class="text-gray-800">No mails, Please check back later</b>
              <p class="text-gray-800">Sorry, I couldn't send you a mail for announce/update, Please check back later</p>`;
                }
          });
    }, 3000)
      document.getElementById('notifications').innerHTML = "Receving new mail...,Refreshing your mailbox"
    }
  </script>
</body>

</html>