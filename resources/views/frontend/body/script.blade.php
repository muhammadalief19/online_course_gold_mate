 {{-- /// Start Wishlist Add Option // --}}
 <script src="https://js.stripe.com/v3/"></script>
 <script type="text/javascript">

    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })

    function addToWishList(course_id){

        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-wishlist/"+course_id,

            success:function(data){

                  // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 6000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message

            }
        })

    }


 </script>
 {{-- /// End Wishlist Add Option // --}}

  {{-- /// Start Load Wishlist Data // --}}
 <script type="text/javascript">

function wishlist() {
    $.ajax({
        type: "GET",
        dataType: "json",
        url: "/get-wishlist-course/",
        success: function (response) {
            $("#wishQty").text(response.wishQty);
            var rows = "";

            $.each(response.wishlist, function (key, value) {
                const isInWishlist = response.wishlistIds.includes(value.course.id);

                rows += `
                    <div class="col-xl-4 col-md-6">
                        <div class="courses__item courses__item-two shine__animate-item">
                            <div class="courses__item-thumb courses__item-thumb-two">
                                <a href="/course/details/${value.course.id}/${value.course.course_name_slug}" class="shine__animate-link">
                                    <img src="/${value.course.course_image}" alt="Course image">
                                </a>
                            </div>
                            <div class="courses__item-content courses__item-content-two">
                                <ul class="courses__item-meta list-wrap">
                                    <li class="courses__item-tag">
                                        <a href="course.html">${value.course.label}</a>
                                    </li>
                                    <li class="price">
                                        ${
                                            value.course.discount_price == null
                                                ? `<del>$${value.course.selling_price}</del>`
                                                : `<del>$${value.course.selling_price}</del> $${value.course.discount_price}`
                                        }
                                    </li>
                                </ul>
                                <h5 class="title">
                                    <a href="/course/details/${value.course.id}/${value.course.course_name_slug}">
                                        ${value.course.course_name}
                                    </a>
                                </h5>
                                <div class="courses__item-content-bottom">
    <div class="author-two">
        <!-- Button untuk Remove Wishlist -->
        <div class="wishlist-button">
            <button class="wishlist-remove-dashboard" data-course-id="${value.course.id}">
    <i class="fas fa-heart" style="cursor: pointer; color: red;"></i>
</button>

        </div>
    </div>
    <div class="avg-rating">
        <i class="fas fa-star"></i> (4.5 Reviews)
    </div>
</div>

                            </div>
                            <div class="courses__item-bottom-two">
                                <ul class="list-wrap">
                                    <li><i class="flaticon-book"></i>${value.course.lectures}</li>
                                    <li><i class="flaticon-clock"></i>${value.course.duration} hours</li>
                                    <li><i class="flaticon-mortarboard"></i>${value.course.students}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                `;
            });

            $("#wishlist").html(rows);
        },
        
    });
}

// Menangani klik tombol remove di wishlist dashboard
$(document).on("click", ".wishlist-remove-dashboard", function () {
    let button = $(this);
    let courseId = button.data("course-id"); // ID course yang akan dihapus

    $.ajax({
        type: "GET",
        url: `/user/dashboard/wishlist-remove/${courseId}`, // Endpoint khusus dashboard
        success: function (response) {
            if (response.success) {
                // Hapus elemen wishlist dari tampilan
                button.closest(".col-xl-4").remove();

                // Tampilkan notifikasi
                Swal.fire({
                    icon: "success",
                    title: "Removed!",
                    text: response.message,
                    timer: 3000,
                });

                // Perbarui jumlah wishlist
                $("#wishQty").text(response.wishlist_count);
            } else {
                // Tampilkan pesan error
                Swal.fire({
                    icon: "error",
                    title: "Error",
                    text: response.message,
                });
            }
        },
        error: function () {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Something went wrong. Please try again.",
            });
        },
    });
});


// Handle Wishlist Button Click
$(document).on("click", ".wishlist-toggle", function () {
    let button = $(this);
    let id = button.data("course-id");
    let action = button.data("action"); // "add" or "remove"

    let url = action === "add" ? `/add-to-wishlist/${courseId}` : `/wishlist-remove/${id}`;

    $.ajax({
        url: url,
        method: "POST",
        data: {
            _token: $('meta[name="csrf-token"]').attr("content"), // CSRF token
        },
        success: function (response) {
            if (response.success) {
                // Tampilkan notifikasi
                alert(response.message);

                // Ubah tampilan ikon sesuai status
                if (action === "add") {
                    button.data("action", "remove");
                    button.find("i").css("color", "red");
                } else {
                    button.data("action", "add");
                    button.find("i").css("color", "black");
                }

                // Refresh wishlist quantity
                wishlist();
            }
        },
        error: function () {
            alert("Something went wrong. Please try again.");
        },
    });
});

// Load Wishlist on Page Load
wishlist();




    /// WishList Remove Start  //

    function wishlistRemove(id){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/wishlist-remove/"+id,

            success:function(data){
             wishlist();
                 // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 6000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message


            }
        })

    }

    /// End WishList Remove //


 </script>
  {{-- /// End Load Wishlist Data // --}}



    {{-- /// Start Add To Cart  // --}}
  <script type="text/javascript">

   function addToCart(courseId, courseName, instructorId, slug){
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}',
                course_name: courseName,
                course_name_slug: slug,
                instructor: instructorId
            },

            url: "/cart/data/store/"+ courseId,
            success: function(data) {
                miniCart();

                 // Start Message

            const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message
            }
        });
   }

</script>
     {{-- /// End Add To Cart  // --}}



         {{-- /// Start Buy Now Button  // --}}
  <script type="text/javascript">

    function buyCourse(courseId, courseName, instructorId, slug){
         $.ajax({
             type: "POST",
             dataType: 'json',
             data: {
                 _token: '{{ csrf_token() }}',
                 course_name: courseName,
                 course_name_slug: slug,
                 instructor: instructorId
             },

             url: "/buy/data/store/"+ courseId,

             success: function(data) {
                 miniCart();

                  // Start Message

             const Toast = Swal.mixin({
                   toast: true,
                   position: 'top-end',
                   showConfirmButton: false,
                   timer: 3000
             })
             if ($.isEmptyObject(data.error)) {

                     Toast.fire({
                     type: 'success',
                     icon: 'success',
                     title: data.success,
                     });

                     // Redirect to the checkout page
                     window.location.href = '/checkout';

             }else{

            Toast.fire({
                     type: 'error',
                     icon: 'error',
                     title: data.error,
                     })
                 }

               // End Message
             }
         });
    }

 </script>
      {{-- /// End Buy Now Button  // --}}


 {{-- /// Start Mini Cart  // --}}
  <script type="text/javascript">

    function miniCart(){
        $.ajax({
            type: 'GET',
            url: '/course/mini/cart',
            dataType: 'json',
            success:function(response){

                $('span[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);

                var miniCart = ""

                $.each(response.carts, function(key,value){
                    miniCart += `<li class="media media-card">
                            <a href="shopping-cart.html" class="media-img">
                                <img src="/${value.options.image}" alt="Cart image">
                            </a>
                            <div class="media-body">
                                <h5><a href="/course/details/${value.id}/${value.options.slug}"> ${value.name}</a></h5>

                                 <span class="d-block fs-14">$${value.price}</span>
                                 <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)"><i class="la la-times"></i> </a>
                            </div>
                        </li>
                        `
                });
                $('#miniCart').html(miniCart);

            }
        })
    }
    miniCart();

    // Mini Cart Remove Start
    function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/course/remove/'+rowId,
            dataType: 'json',
            success:function(data){
            miniCart();
// Start Message

const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message


            }
        })
    }

    // End Mini Cart Remove

 </script>
{{-- /// End Mini Cart // --}}



 {{-- /// Start MyCart  // --}}
 <script type="text/javascript">

    function cart(){
        $.ajax({
            type: 'GET',
            url: '/get-cart-course',
            dataType: 'json',
            success:function(response){

                $('span[id="cartSubTotal"]').text(response.cartTotal);

                var rows = ""
                $.each(response.carts, function(key,value){
                    rows += `
               <tr>
                                    <td class="product__thumb">
                                        <a href="shop-details.html"><img src="/${value.options.image}" alt=""></a>
                                    </td>
                                    <td class="product__name">
                                        <a href="/course/details/${value.id}/${value.options.slug}">${value.name}</a>
                                    </td>
                                    <td class="product__price">$${value.price}</td>
                                    <td class="product__remove">
                                        <a id="${value.rowId}"  onclick="cartRemove(this.id)" href="#">×</a>
                                    </td>
                                </tr>
                `

                });

                $('#cartPage').html(rows);


            }
        })
    }
    cart();

     // My Cart Remove Start
     function cartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/cart-remove/'+rowId,
            dataType: 'json',

            success:function(data){
            miniCart();
            cart();
            couponCalculation();
// Start Message

const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message


            }
        })
    }

    // End My Cart Remove

</script>
{{-- /// End MyCart // --}}


 {{-- /// Apply Coupon Start  // --}}
 <script type="text/javascript">
    function applyCoupon(){
        var coupon_name = $('#coupon_name').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: {coupon_name:coupon_name},
            url: "/coupon-apply",

            success:function(data){
                couponCalculation();

                if (data.validity == true) {
                    $('#couponField').hide();
                }

// Start Message

const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message


            }
        })
    }


    /// Start Coupon Calculation Method
    function couponCalculation() {
        $.ajax({
            type: 'GET',
            url: "/coupon-calculation",
            dataType: 'json',

            success: function(data) {
                if (data.total) {
                    // Jika tidak ada kupon, hanya menampilkan subtotal dan total
                    $('.cart__collaterals-wrap .list-wrap').html(`
                        <li>Subtotal <span>$${data.total}</span></li>
                        <li>Total <span class="amount">$${data.total}</span></li>
                    `);
                } else {
                    // Jika kupon diterapkan, menampilkan subtotal, nama kupon, diskon, dan total
                    $('.cart__collaterals-wrap .list-wrap').html(`
                        <li>Subtotal <span>$${data.subtotal}</span></li>
                        <li>Coupon Name <span>${data.coupon_name} <button type="button" class="icon-element icon-element-xs shadow-sm border-0" onclick="couponRemove()">
                            <i class="la la-times"></i>
                        </button></span></li>
                        <li>Coupon Discount <span>-$${data.discount_amount}</span></li>
                        <li>Total <span class="amount">$${data.total_amount}</span></li>
                    `);
                }
            }
        });
    }

    // Panggil fungsi couponCalculation saat halaman dimuat
    $(document).ready(function() {
        couponCalculation();
    });

</script>
{{-- /// End Apply Coupon  // --}}

<script type="text/javascript">
   function applyInsCoupon(){
        var coupon_name = $('#coupon_name').val();
        var course_id = $('#course_id').val();
        var instructor_id = $('#instrutor_id').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data: {coupon_name:coupon_name,course_id:course_id,instructor_id:instructor_id},
            url: "/inscoupon-apply",

            success:function(data){
                couponCalculation();

                if (data.validity == true) {
                    $('#couponField').hide();
                }

// Start Message

const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message


            }
        })
    }


</script>

 {{-- /// Remove Coupon Start  // --}}
 <script type="text/javascript">

    function couponRemove(){
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: '/coupon-remove',

            success:function(data){
                couponCalculation();
                $('#couponField').show();

                // Start Message

const Toast = Swal.mixin({
                  toast: true,
                  position: 'top-end',
                  showConfirmButton: false,
                  timer: 3000
            })
            if ($.isEmptyObject(data.error)) {

                    Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                    })

            }else{

           Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                    })
                }

              // End Message

            }
        })
    }


</script>
{{-- /// End Remove Coupon  // --}}




