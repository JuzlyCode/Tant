<style>
    :root {
        --white-color: #fff;
        --text-white: #fff;
        --black-color: #000;
        --text-color: rgb(89, 88, 88);
        --color-shop: #2b80dd;
        --hover-text: rgb(226, 107, 51);
        --hover-box: #ededed;
    }

    * {
        text-transform: capitalize;
        box-sizing: inherit;
        margin: 0;
        padding: 0;
    }

    html {
        /* Font size = 10px */
        font-size: 62.5%;
        line-height: 1.6rem;
        font-family: 'Roboto', sans-serif;
        box-sizing: border-box;
    }

    .grid {
        width: 1200px;
        max-width: 100%;
        margin: 0 auto;
    }

    .list-tyle-none {
        list-style: none;
    }

    @keyframes showAnimationNotifi {
        from {
            transform: translateY(10px);
            opacity: 0;
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes showAnimationOpacity {
        from {

            opacity: 0;
        }

        to {
            opacity: 1;

        }
    }

    /* Header */

    #header {
        height: 130px;
        width: 100%;
    }

    .header-container {
        height: 94px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .header-container__logo {
        display: flex;
    }

    .header-container__logo-size {
        height: 88px;
        align-items: center;
    }

    .header-container__search {
        width: 700px;
        display: flex;
    }

    .header-container__search-input {
        width: 100%;
        padding-right: 38px;
        line-height: 36px;
        padding-left: 10px;
        background-color: transparent;
        border: 1px solid var(--color-shop);
        color: var(--color-shop);

    }

    .header-container__search-icon {
        border: 1px solid var(--color-shop);
        color: var(--text-white);
        cursor: pointer;
        width: 46px;
        border-radius: 0 4px 4px 0;
        background-color: var(--color-shop);
        text-align: center;
        padding-top: 9px;
        font-size: 16px;
    }

    .header-container__cart {}

    .header-container__cart-icon {
        font-size: 24px;
        color: var(--color-shop);
    }

    .header-menu {
        height: 36px;
        width: 100%;
        background-color: var(--color-shop);
    }

    .header-menu-flex {
        display: flex;
        justify-content: space-between;
    }

    .header-menu_product {}

    .header-menu_product-list {}

    .header-menu_product-item {
        display: inline-flex;
        align-items: center;
        font-size: 13px;
        color: var(--text-white);
        font-weight: 600;
        padding: 0 60px;
        line-height: 36px;
        text-transform: uppercase;
        position: relative;
    }

    .product-item_name {
        text-transform: uppercase;
    }

    .more-list_menu {
        z-index: 10;
        padding-top: 10px;
        flex-wrap: wrap;
        list-style: none;
        top: 110%;
        position: absolute;
        background-color: var(--white-color);
        color: var(--text-color);
        width: 700px;
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.4);
        display: none;
    }

    .more-list_menu::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 10px;
        top: -7px;
    }

    .header-menu_product-list li:hover .more-list_menu {
        display: flex;
        animation: showAnimationNotifi ease-in .2s;
    }

    .about-laptop {
        margin: 0 auto;
        width: 40%;
    }

    .more-list_menu-item {
        font-size: 15px;
        font-weight: 400;
        color: var(--text-color);
    }

    .menu-item__layout {
        font-weight: 600;
        font-size: 15px;
        margin-left: -15px;
        color: var(--text-white);
        width: 80%;
        border-bottom-right-radius: 15px;
        padding: 0 10px;
        background-color: var(--color-shop);
    }

    .fix-item-icon {
        font-size: 18px;
        margin-right: 7px;

    }

    .header-menu_user {}

    /* Body */

    .container {
        margin-top: 10px;
    }

    .container-header {}

    .container-header__text {
        color: var(--text-white);
        font-size: 15px;
        text-transform: uppercase;
        font-weight: 600;
        display: inline-block;
        width: 80%;
        text-align: center;
        cursor: pointer;
    }

    .container-header__box {
        display: inline-block;
        width: 25%;
        padding: 10px 10px;
        background-color: var(--color-shop);
    }


    .container-header__text:hover {
        color: var(--black-color);
        animation: showAnimationOpacity ease-in .3s;
    }

    .container-header__land {
        display: flex;
        justify-content: space-between;
    }

    .container-price {
        background-color: var(--white-color);
        width: 74.5%;
        display: flex;
        align-items: center;
        position: relative;
    }



    .container-price__text {
        z-index: 1;
        font-size: 12px;
        font-weight: 700;
        margin-left: 5px;
        margin-right: 10px;
    }

    .container-price a p {
        text-transform: uppercase;
        color: var(--color-shop);
    }

    .container-price a:hover p {
        color: rgb(226, 107, 51);
    }

    .container-proce__link {
        text-decoration: none;
        margin: 0 10px;
        z-index: 1;
    }



    .container-products__item-img {
        height: 228px;
        width: 228px;
    }

    .container-products__item {
        margin-top: 10px;
        width: 25%;
        background-color: var(--white-color);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        margin-bottom: 20px;
    }

    .container-products__item-review-link {
        text-decoration: none;
    }

    .container-products__item-review-text {
        margin: 0 20px;
        color: var(--text-color);
        margin-bottom: 10px;
    }

    /* style create */
    .form-login {
        width: 400px;
        margin: 0 auto;
        margin-top: 30px;
    }

    .form-flex {
        display: block;

    }

    .form-login__input-size {}

    .form-login__input {
        margin-top: 3px;
        margin-bottom: 10px;
        width: 100%;
        padding: 5px 10px;
        border: solid 1px var(--color-shop);
    }

    .form-login__btn-size {}

    .form-login__btn-style {
        padding: 5px 10px;
        background-color: var(--color-shop);
        border: none;
        border-radius: 2px;
        color: var(--text-white);
        float: right;
        margin: 0 20px;
    }

    .header-menu_product-link {
        text-decoration: none !important;
    }

    .product-link_style {
        color: var(--text-white);
    }

    /* index css */
    /* User menu */
    .container-products {
        display: flex;
        flex-wrap: wrap;
    }

    .container-products__item {
        margin: 10px 5px 0px 5px;
        width: 24.16%;
        background-color: var(--white-color);
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        position: relative;
    }

    .container-price::before {
        content: "";
        position: absolute;
        top: 0;
        left: -50px;
        width: 500px;
        height: 100%;
        background: var(--white-color);
        transform: skew(65deg);
        /* display: none; */
    }

    /* page product */

    .list_pages-product {
        margin: 0 1px;
        text-decoration: none;
        font-size: 18px;
        padding: 8px 10px;
        border: 1px solid #ddd;
        background-color: var(--white-color);
        color: var(--text-color);
    }

    .prnext-style {
        font-size: 12px;
        padding: 8px 8px;
    }

    .list_pages-product:hover {
        background-color: var(--hover-box);
    }

    .pages_product {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    /* discout */

    .product-discount-persent {
        position: absolute;
        width: 44px;
        top: 10px;
        right: 0px;
        color: red;
        font-size: 16px;
        font-weight: 550;
        opacity: .8;
    }

    .product-discount {
        position: absolute;
        opacity: .7;
        top: -4px;
        right: -4px;
        border-top-right-radius: 5px;
        border-top: 40px solid yellow;
        border-left: 25px solid yellow;
        border-right: 25px solid yellow;
        border-bottom: 15px solid transparent
    }

    .more-list_user-menu {
        list-style: none;
        position: absolute;
        border-radius: 3px;
        box-shadow: 0 0 3px var(--color-shop);
        top: 110%;
        right: 10%;
        z-index: 2;
        background-color: var(--white-color);
        display: none;
    }

    .more-list_user-menu::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 10px;
        top: -9px;
    }

    .header-menu_product-list li:hover .more-list_user-menu {
        display: block;
    }

    .more-list_user-link {
        text-decoration: none;
    }

    .more-list_menu-item {
        min-width: 130px;
        padding: 0 10px;
        text-align: center;
    }

    .more-list_menu-item:hover,
    .more-list_menu-item:hover .input_logout {
        color: var(--color-shop);
        background: #ededed !important;
    }

    .user-icon-dot {
        display: none;
    }

    .user-icon-down {
        display: inline-block;
    }

    .hover_dot-down:hover .user-icon-down {
        display: none;
    }

    .hover_dot-down:hover .user-icon-dot {
        display: inline-block;
    }
</style>