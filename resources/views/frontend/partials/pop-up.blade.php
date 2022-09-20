<div class="container shadow-lg pop-up" id="pop-up">
    <div class="row">
        <div class="col imgcol">
        </div>
        <div class="col p-4">
            <div class="d-flex justify-content-between">
                <div>
                    <h3>
                        Get Our Free Consultation
                    </h3>
                </div>
                <div>
                    <a class="btn btn-danger btn-sm text-white pop-close" onclick="ClosePopUp()">&times;</a>
                </div>
            </div>
            <br>
            <form action="{{ route('contact.store') }}" method="post">
                @csrf
                <div class="row my-2">
                    <div class="col">
                        <input type="text" name="name" required placeholder="Your Name?" class="form-control"
                            id="">
                    </div>
                    <div class="col">
                        <input type="text" name="profession" required placeholder="Your Profession?"
                            class="form-control" id="">
                    </div>
                </div>
                <div class="my-2">
                    <input type="email" name="email" placeholder="Your Email?" class="form-control" id="">
                </div>
                <div class="my-2">
                    <div class="subject-filter">
                        <select name="country" class="form-control" required id="">
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
                    <input type="tel" name="contact" placeholder="Your Contact Number?" class="form-control"
                        id="">
                </div>
                <div class="my-2">
                    <div class="contact-input">
                        <textarea name="message" cols="30" rows="10" class="form-control" style="resize: none;"
                            placeholder="Work details"></textarea>
                    </div>
                </div>
                <div class="my-2">
                    <button id="pop-btn" class="thm-btn thm-btn-2 bg-primary text-white"
                        style="width: 100%!important">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
