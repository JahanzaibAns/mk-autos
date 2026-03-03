<div class="offcanvas offcanvas-end filters_offcanvas" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasRightLabel">Filters</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body" data-lenis-prevent-wheel data-lenis-prevent-touch>

        {{-- Form for filters --}}
        <form action="{{ route('our.fleet') }}" method="GET" id="filtersForm">

            {{-- Call your helper that generates all filters --}}
            {!! \App\Helpers\GeneralHelper::generateFilters() !!}

            <div class="filter_body">
                <h4>Price Range</h4>
                <div class="price_range-flex">
                    <div class="price_range">
                        <label for="max_day_budget">Max Day Budget</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" aria-label="Max Day Budget"
                                name="max_day_budget" aria-describedby="max_day_budget"
                                value="{{ request('max_day_budget') }}">
                            <span class="input-group-text" id="max_day_budget"><span class="aed_sign">D</span> </span>
                        </div>
                    </div>
                    <div class="price_range">
                        <label for="max_monthly_budget">Max Monthly Budget</label>
                        <div class="input-group mb-3">
                            <input type="number" class="form-control" aria-label="Max Monthly Budget"
                                name="max_monthly_budget" aria-describedby="max_monthly_budget"
                                value="{{ request('max_monthly_budget') }}">
                            <span class="input-group-text" id="max_monthly_budget"><span class="aed_sign">D</span> </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="filter_footer">
                <button type="submit" class="btn themeBtn">Show Results</button>
            </div>
        </form>
    </div>
</div>
