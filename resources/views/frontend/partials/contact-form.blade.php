<form class="contact-form" method="POST" action="{{ route('contact.store') }}">
    @csrf
    <div class="row">
        <div class="col-lg-4">
            <div class="contact-input">
                <input type="text" name="name" required placeholder="Full Name">
                <i class="ti-user"></i>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="contact-input">
                <input type="email" name="email" required placeholder="Email address">
                <i class="ti-email"></i>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="contact-input">
                <input type="text" name="profession" required placeholder="Profession">
                <i class="ti-user"></i>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="contact-input">
                <input type="tel" name="cnumber" required placeholder="Contact Number">
                <i class="ti-contact"></i>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="subject-filter">
                <select name="country" id="select">
                    <option value="1">Select Region</option>
                    @foreach ($countries as $country)
                        <option value="2">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="contact-input">
                <textarea name="message" cols="30" rows="10" placeholder="Work details"></textarea>
                <i class="ti-pencil"></i>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="contact-btn text-md-right">
                <button class="thm-btn" type="submit">Get A Quote</button>
            </div>
        </div>
    </div>
</form>
