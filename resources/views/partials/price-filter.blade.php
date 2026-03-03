<select name="price_filter" id="price_filter" class="form-select">
    <option value="">--Sort By Price--</option>
    <option value="high to low daily" {{ request('price_filter') == 'high to low daily' ? 'selected' : '' }}>
        Daily (high to low)
    </option>
    <option value="low to high daily" {{ request('price_filter') == 'low to high daily' ? 'selected' : '' }}>
        Daily (low to high)
    </option>
    <option value="high to low weekly" {{ request('price_filter') == 'high to low weekly' ? 'selected' : '' }}>
        Weekly (high to low)
    </option>
    <option value="low to high weekly" {{ request('price_filter') == 'low to high weekly' ? 'selected' : '' }}>
        Weekly (low to high)
    </option>
    <option value="high to low monthly" {{ request('price_filter') == 'high to low monthly' ? 'selected' : '' }}>
        Monthly (high to low)
    </option>
    <option value="low to high monthly" {{ request('price_filter') == 'low to high monthly' ? 'selected' : '' }}>
        Monthly (low to high)
    </option>
</select>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const priceFilter = document.getElementById('price_filter');

    priceFilter.addEventListener('change', function () {

        // Get current full URL
        let url = new URL(window.location.href);

        if (this.value) {
            url.searchParams.set('price_filter', this.value);
        } else {
            url.searchParams.delete('price_filter');
        }

        // Redirect to SAME page with updated filter
        window.location.href = url.toString();
    });

});
</script>