<div id="search" class="search-modal">
    <button type="button" class="close">×</button>
    <form  id="search-form"> 
    <!-- action="/clientsearch" method="post" -->
        @csrf
        <input type="search" id="key" name="key" placeholder="Hãy nhập sản phẩm mà bạn quan tâm" />
        <button type="submit" class="btn btn-lg btn-golden">Tìm kiếm</button>
    </form>
</div>

