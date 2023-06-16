function pro(){
    console.log("%cJoin our team of developers! %cWe\"re looking for talented programmers who love to code. %cClick here to apply: %chttps://portfoliyo.glitch.me/apply.html", "background-color: #000; color: #00FF00; font-size: 33px; font-weight: bold; text-shadow: 1px 1px 1px #00FF00, 0px 0px 2px #00FF00, 0px 0px 2px #00FF00;", "color: #FFF; font-size: 20px; font-weight: bold;", "color: #00FF00; font-size: 20px; font-weight: bold;", "color: #00FF00; font-size: 20px; font-weight: bold; text-decoration: underline;");
  };
setInterval(pro,5000);
var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("step");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Generate";
    } else {
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }

  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("step");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      submit();
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, j, valid = true;
    x = document.getElementsByClassName("step");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (!y[i].name == "fulln" && y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }

    // Check every textarea field in the current tab:
    y = x[currentTab].getElementsByTagName("textarea");
    for (j = 0; j < y.length; j++) {
      // If a field is empty...
      if (y[j].value == "") {
        // add an "invalid" class to the field:
        y[j].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }

    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }

  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("stepIndicator");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  };


  function again() {
    document.location = '/';
  };
  const ValidateImg = (file) => {
    let img = new Image()
    img.src = window.URL.createObjectURL(document.querySelector('input[type="file"]').files[0])
    img.onload = () => {
      if (img.width > 720 || img.height > 480) {
        document.querySelector('input[type="file"]').value = '';
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'The picture is bigger than 720 x 480 !!',
          footer: 'Please Chose another picture'
        })
      }
    }
  };

  const button = document.getElementById('nextBtn');
  document.querySelector('select').onchange = function () {
    var sel = document.querySelector('select').value;
    if (sel === 'more') {
      Swal.fire({
        title: 'Feature will be available as Soon as possible',
        icon: 'info',
        text: 'Please select from the two options while the developer is trying to add more templates. Thank you for understanding.'
      });
      document.querySelector('select').value = '2';
    };
  };
  // Add a click event listener to the submit button
  //button.addEventListener('click', function(event) {
  function submit() {
    var fn = document.querySelector('input[name="fname"').value;
    var ln = document.querySelector('input[name="lname"').value;
    var es = fn + ' ' + ln;
    es = es.replaceAll(' ', '_');
    var fl = document.querySelector('input[name="fulln"').value = es;
  
    const form = document.getElementById('signUpForm');
    var qr = '';
    // Prevent the default form submission behavior
    //if(document.getElementsByClassName('step')[4].style.display === "block"){
    event.preventDefault();

    // Create a new FormData object and append the form data to it
    const formData = new FormData(form);
    Swal.fire({
      title: 'Do you confirm?',
      icon: 'question',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#dc3545',
      confirmButtonText: 'Yes, I confirm!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: 'Creating Portfolio',
          icon: 'info',
          showConfirmButton: false,
          allowOutsideClick: false,
          customClass: 'cu'
        });
        var fname = document.querySelector('input[name="fname"]').value;
        var lname = document.querySelector('input[name="lname"]').value;
        var errormsg = 'We think that you already have a portfolio at https://portfoliyo.glitch.me/' + es + '. If not or you want to remove it please contact us by sending email at elyagoubiabdessattar@gmail.com';

        // Send an AJAX request to the PHP script
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'api/index.php');
        xhr.onload = function () {
          if (xhr.status === 200) {
            if (xhr.responseText === 'failed') {
              show();
            } else {
              var u = xhr.responseText;
              var pro = u + '/profile.png';
              fetch('https://qrtiger.com/qrcodes/qr2', {
                  method: 'POST',
                  headers: {
                    'Content-Type': 'application/json'
                  },
                  body: JSON.stringify({
                    "backgroundColor": "rgb(255,255,255)",
                    "colorDark": "#6c0799",
                    "colorType": "SINGLE_COLOR",
                    "gradientType": "linear",
                    "frameColor": "#6c0799",
                    "frameColor2": "#d8a3f0",
                    "frameColorStyleType": "SINGLE_COLOR",
                    "frameGradientType": "linear",
                    "frameGradientStartColor": "#6c0799",
                    "frameGradientEndColor": "#f30505",
                    "frameText": "YOUR PORTFOLIO",
                    "eye_outer": "eyeOuter2",
                    "eye_inner": "eyeInner1",
                    "size": 500,
                    "qrData": "pattern0",
                    "transparentBkg": false,
                    "frame": 14,
                    "qrCategory": "url",
                    "text": u
                  })
                })
                .then(response => {
                  if (!response.ok) {
                    throw new Error('The response is not as expected, there is a technical issue. If persist please contact support at elyagoubiabdessattar@gmail.com');
                  }
                  return response.json();
                })
                .then(data => {
                  const pngData = data.data;
                  const byteCharacters = atob(pngData);
                  const byteNumbers = new Array(byteCharacters.length);
                  for (let i = 0; i < byteCharacters.length; i++) {
                    byteNumbers[i] = byteCharacters.charCodeAt(i);
                  }
                  const byteArray = new Uint8Array(byteNumbers);
                  const pngBlob = new Blob([byteArray], {
                    type: 'image/png'
                  });
                  const url = URL.createObjectURL(pngBlob);
                  qr = url;
                  Swal.fire({
                    title: 'success!',
                    html: 'Portfolio created successfully. Please click <a target="_blank" href=' + xhr.responseText + ' >Here</a> to visit your portfolio. Or scan and share this QR Code to visit it<br/><img src=' + qr + ' width="250px" height="250px"/>',
                    icon: 'success',
                    footer: 'Please share the link of your portfolio to you clients or friends.'
                  });

                }).catch(error => {
                  Swal.fire({
                    icon: 'error',
                    title: 'Opps error occured',
                    text: error
                  })
                });
            }
          } else {
            Swal.fire({
              title: 'Failed!',
              text: 'Opps... An error occured',
              icon: 'error'
            });
          }
        };
        xhr.send(formData);
      }
    });
  }
  var pic = '';

  function show() {
    var fn = document.querySelector('input[name="fname"').value;
    var ln = document.querySelector('input[name="lname"').value;
    var es = fn + ' ' + ln;
    es = es.replaceAll(' ', '_');
    pic = 'https://portfoliyo.glitch.me/' + es + '/profile.png';
    Swal.fire({
      icon: 'question',
      title: 'is that you?',
      html: '<img src=' + pic + ' width="200px" height="200px" />',
      showDenyButton: true,
      showCancelButton: false,
      confirmButtonText: 'Yes I am',
      denyButtonText: `Not me`,
    }).then((result) => {
      if (result.isConfirmed) {
        login();
      } else if (result.isDenied) {
        Swal.fire('Opps', 'There is another portfolio with same name, please try to edit your name or email us at elyagoubiabdessattar@gmail.com', 'error')
      }
    })
  };

  function login() {
    Swal.fire({
      title: 'You already have a portfolio',
      showDenyButton: false,
      showCancelButton: true,
      confirmButtonText: 'I want to edit it',
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        var fname = document.querySelector('input[name="fname"]').value;
        var lname = document.querySelector('input[name="lname"]').value;
        document.location = fname + '_' + lname + '/edit.php';
      }
    })
  }