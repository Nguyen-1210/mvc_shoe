document.querySelectorAll('.featured-image').forEach(image_1 =>{
    image_1.addEventListener('click', () =>{
        var src = image_1.getAttribute('src');
        document.querySelector('.big-image').src = src;
    });
});



$(document).ready(function () {
    $('ul li a').click(function () {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $('li a.active').removeClass('active');
            $(this).addClass('active');
        }
    });

    $('.increment-btn').click(function (e) {
        e.preventDefault();

        const qty = $(this).closest('.view-product-detail').find('.qty').val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10 ) 
        {   
            value++;
            $(this).closest('.view-product-detail').find('.qty').val(value);
        }
    });

    $('.decrement-btn').click(function (e) {
        e.preventDefault();

        const qty = $(this).closest('.view-product-detail').find('.qty').val();
        var value = parseInt(qty, 10);
        value = isNaN(value) ? 0 : value;
        if (value > 1 ) 
        {   
            value--;
            $(this).closest('.view-product-detail').find('.qty').val(value);
        }
    });
});


const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})

// const container = document.querySelector(".container-form"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");

    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";

                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("fa-eye-slash", "fa-eye");
                    })
                }else{
                    pwField.type = "password";
                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("fa-eye", "fa-eye-slash");
                    })
                }
            }) 
        })
    })

    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });


$(document).ready(function () {

    $('.increment-btn').click(function (e) {
        e.preventDefault();

        const qty = $(this).closest('.view-product-detail').find('.qty').val();
    var qs = $('.qty').val();
    alert(qs);
        // const value = parseInt(qty, 10);
        // value = isNaN(value) ? 0 : value;
        // if (value < 10 ) 
        // {   
        //     value++;
        //     $(this).closest('.view-product-detail').find('.qty').val(value);
        // }
    });
});
