<div type="preload" id="preload" class="preload">
  <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/09b24e31234507.564a1d23c07b4.gif" alt="Loading..." width="100" height="100">
    </div>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>
    Official website of the Sakura's House
  </title>
  <style>
    .preload {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #fff;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

  </style>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com/"></script>
</head>
<dialog id="dialog" class="fixed z-10 inset-0 overflow-y-auto">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

      <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
          <!--
            Modal panel, show/hide based on modal state.

            Entering: "ease-out duration-300"
              From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
              To: "opacity-100 translate-y-0 sm:scale-100"
            Leaving: "ease-in duration-200"
              From: "opacity-100 translate-y-0 sm:scale-100"
              To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
          -->
          <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
              <div class="sm:flex sm:items-start">
                <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-blue-100 sm:mx-0 sm:h-10 sm:w-10">
                  <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 6.634zM12 15.75h6.75m-6.75-3.75h6.75m-6.75-3.75h6.75m-6.7-3.75h.008v5.001m-.008-5.000H6.726M12 9.75h.008v5.001m-.008-5.000H6.726" />
                  </svg>
                </div>
                <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                  <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                    Login with your Cakesy account
                  </h3>
                  <div class="mt-2">
                    <p class="text-sm text-gray-500" id="modal-description">
                      Are you sure you want to login with your Cakesy account?, It will be used to access your account and make cakers in your cake-system will be able to see your cakes.
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
              <button type="button" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:ml-3 sm:w-auto sm:text-sm" id="modal-close" onclick="loginCallback()">Login with Cakesy</button>
              <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" onclick="document.getElementById('dialog').close()">
                Cancel</button>
              <p class="mt-3 text-sm text-gray-500 sm:mt-0">
                Powered by <svg class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 6.634zM12 15.75h6.75m-6.75-3.75h6.75m-6.75-3.75h6.75m-6.7-3.75h.008v5.001m-.008-5.000H6.726M12 9.75h.008v5.001m-.008-5.000H6.726" />
                </svg>Cakesy, Service made by Neyya (Available on Sakura's Client Portal)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </dialog>
<nav class="bg-white border-b border-gray-100 bg-shadow-lg">
  <div class="container mx-auto px-4">
      <div class="flex justify-between items-center py-4">
        <div class="flex items-center">
          <a href="#" class="text-xl font-bold text-gray-800">Sakura</a>
        </div>
        <div class="flex items-center">
          <button class="text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600" onclick="const dialog = document.getElementById('dialog'); dialog.showModal();">Login</button>
    </div>
        <div class="flex">
          <I class="fa-solid fa-envelope text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600" onclick="const alpine = document.getElementById('alpine'); alpine.showModal();"></I>

          </div>
      </div>
      <dialog id="alpine">
        <h1 class="text-center text-2xl font-bold text-gray-800">Mailbox</h1>
        <button class="text-gray-800 hover:text-gray-600 focus:outline-none focus:text-gray-600" onclick="update()">Update and receive new mail</button>
        <div class="flex flex-col items-center justify-center w-full h-full" id="notifications">

          <b class="text-gray-800">No mails, Please check back later</b>
          <p class="text-gray-800">Sorry, I couldn't send you a mail for announce/update, Please check back later</p>
        </div>
        <!-- Icon X -->

        <I class="fa-solid fa-xmark text-gray-800 hover:text-gray-600 text-center focus:outline-none focus:text-gray-600" onclick="const alpine = document.getElementById('alpine'); alpine.close();"></I>
      </dialog>
    </div>
      
  </nav>  
<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
  $(window).on("load", function (){
   setTimeout(()=>{
      $("#preload").fadeOut(100);
    }, 500);
    fetch('/notification.json')
    .then(res => res.json())
    .then(res =>{
      document.getElementById('notifications').innerHTML = res.mail.map(item => `
<div class="flex items-center">
  <h2 class="text-xl font-bold text-gray-800">${item.title}</h2>
  <a href="${item.link}" class="text-gray-600 hover:text-gray-800 ml-2">Open! &rarr;</a>
</div>
              `).join('<br>');
    });
        });
</script>