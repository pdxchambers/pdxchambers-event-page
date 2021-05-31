<?php
function pdxc_display_ui()
{
?>
    <div id="main" class="event">
        <section class="event__block event__block--title">
            <h1>TEMPORARY EVENT TITLE</h1>
        </section>
        <section class="event__block event__block--location1">
            <h2>EVENT LOCATION</h2>
        </section>
        <section class="event__block event__block--location2">
            <h3>EVENT LOCATION DETAIL</h3>
        </section>
        <section class="event__block event__block--date">
            <h2>EVENT DATE</h2>
        </section>
        <section class="event__block event__block--time">
            <h3>EVENT TIME</h3>
        </section>
        <section class="event__block event__block--details">
            <div id="event-details" class="event-detail__wrapper" data-details="event-detail-titles">
                <div class="event-detail event-detail--active">Who</div>
                <div class="event-detail">What</div>
                <div class="event-detail">When</div>
                <div class="event-detail">Where</div>
                <div class="event-detail">How</div>
            </div>
            <div id="event-detail-descriptions" class="event-detail-descriptions__wrapper" data-details="event-detail-descriptions">
                <div class="event-detail-description" data-detail="detail">Event sponsored by people.</div>
                <div class="event-detail-description" data-detail="detail">Bicycle Rodeo, althouth I wouldn't call it that.</div>
                <div class="event-detail-description" data-detail="detail">August 21, 2021</div>
                <div class="event-detail-description" data-detail="detail">Community of Hope Lutheran Church parking lot</div>
                <div class="event-detail-description" data-detail="detail">Come whenever, stay as long as you like.</div>
            </div>
        </section>
    </div>
<?php
}
?>
