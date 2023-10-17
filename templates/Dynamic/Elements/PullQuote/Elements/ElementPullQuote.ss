<div class="col-md-12 bg-light element__pull__quote">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-10 col-xl-8">
                <div class="card rounded-3">
                    <div class="card-body p-5">
                        <% if $Image %>
                            <div class="d-flex justify-content-center mb-4">
                                <img src="$Image.FocusFill(100,100).URL"  alt="$Image.Title.ATT"
                                    class="rounded-circle shadow-1-strong" width="100" height="100" />
                            </div>
                        <% end_if %>
                        <figure class="text-center mb-0">
                            <blockquote class="blockquote mb-4">
                                <p>
                                <span class="font-italic">$Content</span>
                                </p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0">
                                $Title <% if $JobTitle %>at <cite title="Source Title">$JobTitle</cite><% end_if %>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
