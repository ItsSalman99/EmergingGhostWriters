<div class="container shadow-lg pop-up" id="pop-up">
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        <div class="col pop-img">

        </div>
        <div class="col p-4">
            <div class="d-flex justify-content-between">
                <div>
                    <h3>Get Our Free Consultation</h3>
                </div>
                <div>
                    <a class="btn btn-danger btn-sm text-white" onclick="ClosePopUp()">&times;</a>
                </div>
            </div>
            <br>
            <div class="row my-2">
                <div class="col">
                    <input type="text" name="name" required placeholder="Your Name?" class="form-control"
                        id="">
                </div>
                <div class="col">
                    <input type="text" name="profession" required placeholder="Your Profession?" class="form-control"
                        id="">
                </div>
            </div>
            <div class="my-2">
                <input type="email" name="email" placeholder="Your Email?" class="form-control" id="">
            </div>
            <div class="my-2">
                <input type="tel" name="contact" placeholder="Your Contact Number?" class="form-control"
                    id="">
            </div>
            <div class="my-2">
                <div class="subject-filter">
                    <select name="country" class="form-control" id="">
                        <option value="">--- Select Region ---</option>
                        @foreach ($countries as $country)
                            <option value="{{ $country->id }}">
                                {{ $country->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="my-2">
                <button class="thm-btn thm-btn-2 bg-primary text-white" style="width: 100%!important">
                    Send
                </button>
            </div>
        </div>
    </div>
</div>
