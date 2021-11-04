function change(ele)
{
    var growth = document.querySelector("#growth");
    var pro = document.querySelector("#pro");
    if(ele.checked)
    {
        growth.innerHTML = `
        <span class="fs-4 fw-bold card-text">$529</span>
        <span class="card-text">/year</span>`;
        pro.innerHTML = `
        <span class="fs-4 fw-bold card-text">$997</span>
        <span class="card-text">/year</span>`;
    }
    else
    {
        growth.innerHTML = `
        <span class="fs-4 fw-bold card-text">$49</span>
        <span class="card-text">/month</span>`;
        pro.innerHTML = `
        <span class="fs-4 fw-bold card-text">$99</span>
        <span class="card-text">/month</span>`;
    }
}