function viewMoreReviews() 
{
    var hiddenReviews = document.querySelector(".hidden-reviews");

    var btn = document.querySelector("#view-more-reviews-btn");

    if(hiddenReviews.style.display != "none")
    {
        hiddenReviews.style.display = "none";
        btn.innerHTML = `<i class="fas fa-chevron-down"></i> View More`;
    }
    else
    {
        hiddenReviews.style.display = "block";
        btn.innerHTML = `<i class="fas fa-chevron-up"></i> View Less`;
    }

}