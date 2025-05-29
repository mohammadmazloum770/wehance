
  
  
  <section class="contact-area section-padding" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{$contactTitle->title}}</h3>
                    <div class="desc">
                        <p>{{$contactTitle->sub_title}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                @if(session('success'))
                    <p class="alert alert-success">{{ session('success') }}</p>
                @endif

                <form method="POST" action="{{ route('contact.send') }}" class="contact-form p-4 rounded shadow bg-white">
                    @csrf
                    <div class="form-group mb-4">
                        <input type="text" name="name" class="form-control form-control-lg" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" required>
                    </div>
                    <div class="form-group mb-4">
                        <input type="text" name="subject" class="form-control form-control-lg" placeholder="Subject" required>
                    </div>
                    <div class="form-group mb-4">
                        <textarea name="message" class="form-control form-control-lg" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100" id="submit_btn">Send Message</button>
                </form>
                <!-- Contact-Form / -->
                </div>
                </section>


@push('scripts')
<script>
    $(document).ready(function(){
        // Csrf token
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('submit', '#contact-form', function(e){
            e.preventDefault();
            $.ajax({
                    type: "POST",
                 
                    data: $(this).serialize(),
                    beforeSend: function(){
                        $('#submit_btn').prop("disabled", true);
                        $('#submit_btn').text('Loading...');
                    },
                    success: function(response){
                        console.log(response);
                        if(response.status == 'success'){
                            toastr.success(response.message);
                            $('#submit_btn').prop("disabled", false);
                            $('#submit_btn').text('Send Now');
                            $('#contact-form').trigger('reset');
                        }
                    },
                    error: function(response){
                       if(response.status == 422){
                        let errorsMessage = $.parseJSON(response.responseText);

                        $.each(errorsMessage.errors, function(key, val){
                            console.log(val[0]);
                            toastr.error(val[0])
                        })
                        $('#submit_btn').prop("disabled", false);
                        $('#submit_btn').text('Send Now');

                       }
                    }
            })
        })
    })

</script>
@endpush
