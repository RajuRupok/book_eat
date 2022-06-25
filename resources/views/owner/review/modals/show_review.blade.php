{{-- Upload File Modal --}}
<div class="modal fade" id="show_review">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="card widget-feed m-0 p-0 border-0">
                    <div class="feed-header">
                        <ul class="list-unstyled list-info">
                            <li>
                                <img class="thumb-img img-circle" src="{{ asset('assets/images/avatars/thumb-1.jpg') }}" alt="">
                                <div class="info">
                                    <a href="#" class="title no-pdd-vertical text-semibold inline-block">Jordan Hurst</a>
                                    <span class="sub-title">
                                        <i class="ti-timer pdd-right-5"></i>
                                        <span>17 January, 2020 | 09:30:33</span>
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="feed-body">
                        <p>Remember, a Jedi can feel the Force flowing through him. You mean it controls your actions? Partially. But it also obeys your commands. Hokey religions and ancient weapons are no match for a good blaster at your side, kid. You don't believe in the Force, do you? Kid, I've flown from one side of this galaxy to the other. I've seen a lot of strange stuff, but I've never seen anything to make me believe there's one all-powerful force controlling everything. There's no mystical energy field that controls my destiny. It's all a lot of simple tricks and nonsense. I suggest you try it again, Luke. This time, let go your conscious self and act on instinct. With the blast shield down, I can't even see. How am I supposed to fight? Your eyes can deceive you. Don't trust them.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{ route('owner.review.food.index') }}" class="card">
                                <div class="card-block">
                                    <h4 class="no-mrg-vertical text-bold">Food</h4>
                                    <div class="mrg-top-10">
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('owner.review.service.index') }}" class="card">
                                <div class="card-block">
                                    <h4 class="no-mrg-vertical text-bold">Service</h4>
                                    <div class="mrg-top-10">
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('owner.review.ambience.index') }}" class="card">
                                <div class="card-block">
                                    <h4 class="no-mrg-vertical text-bold">Ambience</h4>
                                    <div class="mrg-top-10">
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width:25%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('owner.review.value.index') }}" class="card">
                                <div class="card-block">
                                    <h4 class="no-mrg-vertical text-bold">Value</h4>
                                    <div class="mrg-top-10">
                                        <div class="progress progress-success">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
