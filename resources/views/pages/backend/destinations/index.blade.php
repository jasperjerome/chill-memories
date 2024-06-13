@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-xl-12">
            <div class="main-content-title-profile mb-50">
                <div class="main-content-title">
                    <h3>All Destinations</h3>
                </div>
                <div class="profile">
                    <a href="#">
                        View Profile
                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewbox="0 0 8 8">
                            <path
                                d="M6.669 2.27202L0.94102 8L0 7.05898L5.72731 1.331H0.679478V0H8V7.32052H6.669V2.27202Z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="counter-area d-none">
                <div class="row g-4 justify-content-center ">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-single">
                            <div class="counter-icon">
                                <svg width="50" height="50" viewbox="0 0 50 50"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M43.5573 29.0081V12.9327C43.5579 12.7808 43.5183 12.6315 43.4426 12.4998C43.3669 12.3681 43.2577 12.2587 43.126 12.1828L22.2099 0.11548C22.0788 0.0398277 21.9301 0 21.7787 0C21.6273 0 21.4785 0.0398277 21.3474 0.11548L0.431267 12.1828C0.299643 12.2587 0.190435 12.3681 0.114703 12.4998C0.0389711 12.6315 -0.000596592 12.7808 6.79915e-06 12.9327V37.0673C-0.000596592 37.2192 0.0389711 37.3685 0.114703 37.5002C0.190435 37.6319 0.299643 37.7413 0.431267 37.8172L21.3474 49.8845C21.4785 49.9602 21.6273 50 21.7787 50C21.9301 50 22.0788 49.9602 22.2099 49.8845L30.0675 45.3507C31.0469 46.722 32.3289 47.8497 33.8143 48.6465C35.2997 49.4433 36.9486 49.8879 38.6335 49.9459C40.3184 50.0038 41.994 49.6736 43.5307 48.9807C45.0674 48.2878 46.424 47.2509 47.4954 45.9501C48.5668 44.6494 49.3244 43.1197 49.7095 41.4795C50.0946 39.8392 50.0969 38.1325 49.7161 36.4912C49.3354 34.85 48.5819 33.3183 47.5139 32.0147C46.446 30.7111 45.0922 29.6706 43.5573 28.9736V29.0081ZM21.7787 1.85662L40.9697 12.9327L31.344 18.4837L13.5243 6.62321L21.7787 1.85662ZM21.7787 24.0088L2.58757 12.9327L11.8597 7.57997L29.6707 19.449L21.7787 24.0088ZM1.72505 14.4239L20.9161 25.4999V47.6434L1.72505 36.5674V14.4239ZM22.6412 47.6434V25.4999L30.4039 20.9919V27.7065C30.4039 27.9351 30.4947 28.1544 30.6565 28.316C30.8182 28.4777 31.0376 28.5685 31.2664 28.5685C31.4951 28.5685 31.7145 28.4777 31.8763 28.316C32.038 28.1544 32.1289 27.9351 32.1289 27.7065V20.0007L41.7891 14.4239V28.3961C40.8756 28.1466 39.933 28.0191 38.9859 28.0168C37.1194 28.0216 35.2849 28.5018 33.6557 29.4121C32.0266 30.3223 30.6565 31.6326 29.6749 33.2192C28.6933 34.8057 28.1327 36.6161 28.0459 38.4794C27.9592 40.3427 28.3492 42.1973 29.1791 43.8681L22.6412 47.6434ZM39.0291 48.2727C37.1952 48.2727 35.4026 47.7292 33.8778 46.7111C32.353 45.6929 31.1646 44.2458 30.4628 42.5526C29.761 40.8595 29.5774 38.9964 29.9351 37.199C30.2929 35.4016 31.176 33.7505 32.4727 32.4547C33.7694 31.1588 35.4216 30.2763 37.2202 29.9188C39.0188 29.5612 40.8831 29.7447 42.5773 30.4461C44.2716 31.1474 45.7197 32.335 46.7385 33.8588C47.7574 35.3826 48.3012 37.1741 48.3012 39.0067C48.2989 41.4635 47.3213 43.819 45.5829 45.5562C43.8446 47.2934 41.4875 48.2704 39.0291 48.2727Z">
                                    </path>
                                    <path
                                        d="M43.1261 34.5332L37.7784 41.584L34.9752 38.2913C34.8277 38.1141 34.6158 38.0028 34.3861 37.9818C34.1564 37.9608 33.9277 38.0318 33.7505 38.1793C33.5732 38.3267 33.4618 38.5385 33.4407 38.768C33.4197 38.9976 33.4908 39.2261 33.6383 39.4032L37.0884 43.5234C37.1694 43.618 37.2699 43.6939 37.3831 43.746C37.4962 43.7981 37.6193 43.825 37.7439 43.825C37.8734 43.8211 38.0004 43.7881 38.1154 43.7284C38.2303 43.6687 38.3304 43.5839 38.4081 43.4803L44.4026 35.5762C44.5149 35.5015 44.6082 35.4014 44.6748 35.2841C44.7415 35.1669 44.7796 35.0356 44.7862 34.9009C44.7929 34.7662 44.7678 34.6318 44.713 34.5085C44.6582 34.3853 44.5752 34.2766 44.4707 34.1912C44.3662 34.1059 44.2431 34.0462 44.1114 34.017C43.9796 33.9878 43.8428 33.99 43.7121 34.0232C43.5813 34.0565 43.4601 34.12 43.3583 34.2085C43.2566 34.2971 43.177 34.4083 43.1261 34.5332Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="counter-content">
                                <p>Total Tour</p>
                                <div class="number">
                                    <h3 class="counter">1530</h3>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-single two">
                            <div class="counter-icon">
                                <svg width="50" height="50" viewbox="0 0 50 50"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M43.5573 29.0081V12.9327C43.5579 12.7808 43.5183 12.6315 43.4426 12.4998C43.3669 12.3681 43.2577 12.2587 43.126 12.1828L22.2099 0.11548C22.0788 0.0398277 21.9301 0 21.7787 0C21.6273 0 21.4785 0.0398277 21.3474 0.11548L0.431267 12.1828C0.299643 12.2587 0.190435 12.3681 0.114703 12.4998C0.0389711 12.6315 -0.000596592 12.7808 6.79915e-06 12.9327V37.0673C-0.000596592 37.2192 0.0389711 37.3685 0.114703 37.5002C0.190435 37.6319 0.299643 37.7413 0.431267 37.8172L21.3474 49.8845C21.4785 49.9602 21.6273 50 21.7787 50C21.9301 50 22.0788 49.9602 22.2099 49.8845L30.0675 45.3507C31.0469 46.722 32.3289 47.8497 33.8143 48.6465C35.2997 49.4433 36.9486 49.8879 38.6335 49.9459C40.3184 50.0038 41.994 49.6736 43.5307 48.9807C45.0674 48.2878 46.424 47.2509 47.4954 45.9501C48.5668 44.6494 49.3244 43.1197 49.7095 41.4795C50.0946 39.8392 50.0969 38.1325 49.7161 36.4912C49.3354 34.85 48.5819 33.3183 47.5139 32.0147C46.446 30.7111 45.0922 29.6706 43.5573 28.9736V29.0081ZM21.7787 1.85662L40.9697 12.9327L31.344 18.4837L13.5243 6.62321L21.7787 1.85662ZM21.7787 24.0088L2.58757 12.9327L11.8597 7.57997L29.6707 19.449L21.7787 24.0088ZM1.72505 14.4239L20.9161 25.4999V47.6434L1.72505 36.5674V14.4239ZM22.6412 47.6434V25.4999L30.4039 20.9919V27.7065C30.4039 27.9351 30.4947 28.1544 30.6565 28.316C30.8182 28.4777 31.0376 28.5685 31.2664 28.5685C31.4951 28.5685 31.7145 28.4777 31.8763 28.316C32.038 28.1544 32.1289 27.9351 32.1289 27.7065V20.0007L41.7891 14.4239V28.3961C40.8756 28.1466 39.933 28.0191 38.9859 28.0168C37.1194 28.0216 35.2849 28.5018 33.6557 29.4121C32.0266 30.3223 30.6565 31.6326 29.6749 33.2192C28.6933 34.8057 28.1327 36.6161 28.0459 38.4794C27.9592 40.3427 28.3492 42.1973 29.1791 43.8681L22.6412 47.6434ZM39.0291 48.2727C37.1952 48.2727 35.4026 47.7292 33.8778 46.7111C32.353 45.6929 31.1646 44.2458 30.4628 42.5526C29.761 40.8595 29.5774 38.9964 29.9351 37.199C30.2929 35.4016 31.176 33.7505 32.4727 32.4547C33.7694 31.1588 35.4216 30.2763 37.2202 29.9188C39.0188 29.5612 40.8831 29.7447 42.5773 30.4461C44.2716 31.1474 45.7197 32.335 46.7385 33.8588C47.7574 35.3826 48.3012 37.1741 48.3012 39.0067C48.2989 41.4635 47.3213 43.819 45.5829 45.5562C43.8446 47.2934 41.4875 48.2704 39.0291 48.2727Z">
                                    </path>
                                    <path
                                        d="M43.1261 34.5332L37.7784 41.584L34.9752 38.2913C34.8277 38.1141 34.6158 38.0028 34.3861 37.9818C34.1564 37.9608 33.9277 38.0318 33.7505 38.1793C33.5732 38.3267 33.4618 38.5385 33.4407 38.768C33.4197 38.9976 33.4908 39.2261 33.6383 39.4032L37.0884 43.5234C37.1694 43.618 37.2699 43.6939 37.3831 43.746C37.4962 43.7981 37.6193 43.825 37.7439 43.825C37.8734 43.8211 38.0004 43.7881 38.1154 43.7284C38.2303 43.6687 38.3304 43.5839 38.4081 43.4803L44.4026 35.5762C44.5149 35.5015 44.6082 35.4014 44.6748 35.2841C44.7415 35.1669 44.7796 35.0356 44.7862 34.9009C44.7929 34.7662 44.7678 34.6318 44.713 34.5085C44.6582 34.3853 44.5752 34.2766 44.4707 34.1912C44.3662 34.1059 44.2431 34.0462 44.1114 34.017C43.9796 33.9878 43.8428 33.99 43.7121 34.0232C43.5813 34.0565 43.4601 34.12 43.3583 34.2085C43.2566 34.2971 43.177 34.4083 43.1261 34.5332Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="counter-content">
                                <p>Completed Tour</p>
                                <div class="number">
                                    <h3 class="counter">1230</h3>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-single three">
                            <div class="counter-icon">
                                <svg width="50" height="50" viewbox="0 0 50 50"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M46.6258 11.9273L35.6883 1.77109C35.5436 1.63687 35.3536 1.56235 35.1562 1.5625H11.7187C11.5115 1.5625 11.3128 1.64481 11.1663 1.79132C11.0198 1.93784 10.9375 2.13655 10.9375 2.34375V15.3953C8.56277 16.7621 6.59023 18.7307 5.21865 21.1027C3.84707 23.4747 3.1249 26.1663 3.1249 28.9062C3.1249 31.6462 3.84707 34.3378 5.21865 36.7098C6.59023 39.0818 8.56277 41.0504 10.9375 42.4172V47.6562C10.9375 47.8634 11.0198 48.0622 11.1663 48.2087C11.3128 48.3552 11.5115 48.4375 11.7187 48.4375H46.0937C46.3009 48.4375 46.4997 48.3552 46.6462 48.2087C46.7927 48.0622 46.875 47.8634 46.875 47.6562V12.5C46.8751 12.3925 46.853 12.2862 46.8101 12.1877C46.7672 12.0892 46.7045 12.0005 46.6258 11.9273ZM35.9375 4.13516L44.1039 11.7188H35.9375V4.13516ZM4.6875 28.9062C4.6875 26.125 5.51225 23.4061 7.05745 21.0935C8.60266 18.781 10.7989 16.9786 13.3685 15.9142C15.9381 14.8498 18.7656 14.5714 21.4935 15.114C24.2213 15.6566 26.727 16.9959 28.6937 18.9626C30.6604 20.9292 31.9997 23.4349 32.5423 26.1628C33.0849 28.8906 32.8064 31.7181 31.7421 34.2877C30.6777 36.8573 28.8753 39.0536 26.5627 40.5988C24.2501 42.144 21.5313 42.9688 18.75 42.9688C15.0217 42.9644 11.4474 41.4814 8.8111 38.8451C6.17481 36.2089 4.69184 32.6345 4.6875 28.9062ZM12.5 46.875V43.2172C14.8781 44.2594 17.4784 44.6926 20.066 44.4776C22.6535 44.2626 25.1467 43.4061 27.3201 41.9856C29.4935 40.5652 31.2787 38.6255 32.5143 36.3418C33.7499 34.0582 34.397 31.5027 34.397 28.9062C34.397 26.3098 33.7499 23.7543 32.5143 21.4707C31.2787 19.187 29.4935 17.2473 27.3201 15.8269C25.1467 14.4064 22.6535 13.5499 20.066 13.3349C17.4784 13.1199 14.8781 13.5531 12.5 14.5953V3.125H34.375V12.5C34.375 12.7072 34.4573 12.9059 34.6038 13.0524C34.7503 13.1989 34.949 13.2812 35.1562 13.2812H45.3125V46.875H12.5Z">
                                    </path>
                                    <path
                                        d="M31.25 28.9063C31.25 26.434 30.5169 24.0172 29.1434 21.9616C27.7698 19.906 25.8176 18.3039 23.5335 17.3578C21.2495 16.4117 18.7361 16.1641 16.3114 16.6464C13.8866 17.1288 11.6593 18.3193 9.91116 20.0674C8.16301 21.8156 6.9725 24.0429 6.49018 26.4676C6.00787 28.8924 6.25541 31.4057 7.2015 33.6898C8.1476 35.9739 9.74976 37.9261 11.8054 39.2996C13.861 40.6731 16.2777 41.4063 18.75 41.4063C22.064 41.4023 25.2411 40.0841 27.5845 37.7408C29.9278 35.3974 31.2461 32.2203 31.25 28.9063ZM7.85234 29.6875H9.375V28.125H7.85234C8.04265 25.505 9.16959 23.0409 11.0271 21.1834C12.8847 19.3258 15.3487 18.1989 17.9687 18.0086V19.5313H19.5312V18.0086C22.1513 18.1989 24.6153 19.3258 26.4729 21.1834C28.3304 23.0409 29.4573 25.505 29.6477 28.125H28.125V29.6875H29.6477C29.4573 32.3076 28.3304 34.7716 26.4729 36.6291C24.6153 38.4867 22.1513 39.6136 19.5312 39.8039V38.2813H17.9687V39.8039C15.3487 39.6136 12.8847 38.4867 11.0271 36.6291C9.16959 34.7716 8.04265 32.3076 7.85234 29.6875Z">
                                    </path>
                                    <path
                                        d="M18.75 29.6875C18.887 29.6882 19.0218 29.6526 19.1406 29.5844L24.6094 26.4594L23.8281 25.1031L18.843 27.9516L13.0117 22.85L11.982 24.0219L18.232 29.4906C18.3748 29.6173 18.5591 29.6874 18.75 29.6875ZM15.625 5.46875H20.3125V7.03125H15.625V5.46875ZM22.6562 5.46875H32.0312V7.03125H22.6562V5.46875ZM15.625 9.375H32.0312V10.9375H15.625V9.375Z">
                                    </path>
                                </svg>
                            </div>
                            <div class="counter-content">
                                <p>Processing Tour</p>
                                <div class="number">
                                    <h3 class="counter">270</h3>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-single four">
                            <div class="counter-icon">
                                <svg width="50" height="50" viewbox="0 0 50 50"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path
                                            d="M41.9586 35.3852C42.0332 35.4572 42.0927 35.5434 42.1337 35.6387C42.1746 35.7341 42.1962 35.8366 42.1971 35.9403C42.198 36.044 42.1782 36.1469 42.1389 36.2429C42.0996 36.3389 42.0416 36.4262 41.9683 36.4995C41.8949 36.5729 41.8077 36.6309 41.7117 36.6702C41.6157 36.7095 41.5128 36.7292 41.4091 36.7283C41.3053 36.7274 41.2028 36.7059 41.1075 36.6649C41.0122 36.624 40.926 36.5645 40.8539 36.4898L39.0625 34.6984L37.2711 36.4898C37.1237 36.6322 36.9264 36.7109 36.7216 36.7091C36.5167 36.7073 36.3208 36.6252 36.1759 36.4803C36.0311 36.3355 35.9489 36.1395 35.9471 35.9347C35.9454 35.7299 36.0241 35.5325 36.1664 35.3852L37.9578 33.5938L36.1664 31.8023C36.0241 31.655 35.9454 31.4577 35.9471 31.2528C35.9489 31.048 36.0311 30.852 36.1759 30.7072C36.3208 30.5623 36.5167 30.4802 36.7216 30.4784C36.9264 30.4766 37.1237 30.5553 37.2711 30.6977L39.0625 32.4891L40.8539 30.6977C41.0013 30.5553 41.1986 30.4766 41.4034 30.4784C41.6083 30.4802 41.8042 30.5623 41.9491 30.7072C42.0939 30.852 42.1761 31.048 42.1779 31.2528C42.1796 31.4577 42.1009 31.655 41.9586 31.8023L40.1672 33.5938L41.9586 35.3852ZM11.7188 37.5H5.46875C5.26155 37.5 5.06284 37.5823 4.91632 37.7288C4.76981 37.8753 4.6875 38.0741 4.6875 38.2813C4.6875 38.4885 4.76981 38.6872 4.91632 38.8337C5.06284 38.9802 5.26155 39.0625 5.46875 39.0625H11.7188C11.926 39.0625 12.1247 38.9802 12.2712 38.8337C12.4177 38.6872 12.5 38.4885 12.5 38.2813C12.5 38.0741 12.4177 37.8753 12.2712 37.7288C12.1247 37.5823 11.926 37.5 11.7188 37.5ZM4.6875 41.4063C4.6875 41.1991 4.76981 41.0003 4.91632 40.8538C5.06284 40.7073 5.26155 40.625 5.46875 40.625H10.1562C10.3635 40.625 10.5622 40.7073 10.7087 40.8538C10.8552 41.0003 10.9375 41.1991 10.9375 41.4063C10.9375 41.6135 10.8552 41.8122 10.7087 41.9587C10.5622 42.1052 10.3635 42.1875 10.1562 42.1875H5.46875C5.26155 42.1875 5.06284 42.1052 4.91632 41.9587C4.76981 41.8122 4.6875 41.6135 4.6875 41.4063ZM12.5 44.5313C12.5 44.7385 12.4177 44.9372 12.2712 45.0837C12.1247 45.2302 11.926 45.3125 11.7188 45.3125H5.46875C5.26155 45.3125 5.06284 45.2302 4.91632 45.0837C4.76981 44.9372 4.6875 44.7385 4.6875 44.5313C4.6875 44.3241 4.76981 44.1253 4.91632 43.9788C5.06284 43.8323 5.26155 43.75 5.46875 43.75H11.7188C11.926 43.75 12.1247 43.8323 12.2712 43.9788C12.4177 44.1253 12.5 44.3241 12.5 44.5313ZM49.2188 33.5938C49.2149 31.0374 48.2478 28.5764 46.5102 26.7013C44.7727 24.8263 42.3924 23.6748 39.8438 23.4766V13.2813C39.8438 13.1269 39.7981 12.9761 39.7125 12.8477L32.3641 1.82422C32.1503 1.50298 31.8604 1.23963 31.5201 1.05765C31.1799 0.875665 30.7999 0.780712 30.4141 0.781252H10.2109C9.82501 0.780797 9.44498 0.87587 9.10473 1.05799C8.76448 1.24011 8.4746 1.50362 8.26094 1.825L0.9125 12.8484C0.827033 12.9766 0.78137 13.1272 0.78125 13.2813V46.875C0.78187 47.4964 1.029 48.0922 1.4684 48.5316C1.90781 48.971 2.50359 49.2181 3.125 49.2188H37.5C38.1214 49.2181 38.7172 48.971 39.1566 48.5316C39.596 48.0922 39.8431 47.4964 39.8438 46.875V43.7109C42.3924 43.5127 44.7727 42.3612 46.5102 40.4862C48.2478 38.6111 49.2149 36.1501 49.2188 33.5938ZM31.0641 2.69141L37.6031 12.5H26.3805L23.6734 2.34375H30.4141C30.5427 2.34353 30.6694 2.37516 30.7828 2.43582C30.8962 2.49649 30.9928 2.5843 31.0641 2.69141ZM15.625 14.0625H25V21.3094L20.7 18.8531C20.582 18.7857 20.4484 18.7503 20.3125 18.7503C20.1766 18.7503 20.043 18.7857 19.925 18.8531L15.625 21.3094V14.0625ZM22.0562 2.34375L24.7641 12.5H15.8609L18.5688 2.34375H22.0562ZM9.56094 2.69141C9.63215 2.5843 9.72879 2.49649 9.84221 2.43582C9.95563 2.37516 10.0823 2.34353 10.2109 2.34375H16.9516L14.2438 12.5H3.02266L9.56094 2.69141ZM37.5 47.6563H3.125C2.9178 47.6563 2.71909 47.5739 2.57257 47.4274C2.42606 47.2809 2.34375 47.0822 2.34375 46.875V14.0625H14.0625V22.6563C14.0625 22.7931 14.0985 22.9275 14.1668 23.046C14.2351 23.1646 14.3333 23.2631 14.4517 23.3317C14.57 23.4004 14.7043 23.4368 14.8411 23.4372C14.9779 23.4377 15.1125 23.4022 15.2312 23.3344L20.3125 20.4305L25.3938 23.3344C25.5125 23.4022 25.6471 23.4377 25.7839 23.4372C25.9207 23.4368 26.055 23.4004 26.1733 23.3317C26.2917 23.2631 26.3899 23.1646 26.4582 23.046C26.5265 22.9275 26.5625 22.7931 26.5625 22.6563V14.0625H38.2812V23.4766C35.7301 23.6695 33.3461 24.8192 31.6065 26.6953C29.867 28.5713 28.9005 31.0353 28.9005 33.5938C28.9005 36.1522 29.867 38.6162 31.6065 40.4922C33.3461 42.3683 35.7301 43.518 38.2812 43.7109V46.875C38.2812 47.0822 38.1989 47.2809 38.0524 47.4274C37.9059 47.5739 37.7072 47.6563 37.5 47.6563ZM39.0625 42.1875C37.3628 42.1875 35.7013 41.6835 34.2881 40.7392C32.8748 39.7949 31.7734 38.4527 31.1229 36.8824C30.4725 35.3121 30.3023 33.5842 30.6339 31.9172C30.9655 30.2502 31.7839 28.7189 32.9858 27.5171C34.1877 26.3152 35.7189 25.4967 37.3859 25.1651C39.053 24.8335 40.7809 25.0037 42.3512 25.6542C43.9215 26.3046 45.2636 27.4061 46.2079 28.8193C47.1522 30.2326 47.6562 31.8941 47.6562 33.5938C47.6538 35.8722 46.7476 38.0566 45.1365 39.6677C43.5254 41.2788 41.3409 42.185 39.0625 42.1875Z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="counter-content">
                                <p>Cancelled Tour</p>
                                <div class="number">
                                    <h3 class="counter">30</h3>
                                    <span>+</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent-listing-area">
                <div class="title-and-tab">
                    <h6 class="opacity-0">Tour Package Info</h6>
                    <a href="{{route('app.destinations.create')}}" class="primary-btn3">Create New</a>
                    <div class="search-area d-none">
                        <form>
                            <div class="search-box">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="bx bx-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="recent-listing-table">
                    <table class="eg-table2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Destination Title</th>
                                <th>Wheather</th>
                                <th>Description</th>
                                <th>Created</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($data->count())
                                @foreach ($data as $index => $datas)
                                <tr>
                                    <td>{{$index+1}} <a href="{{route('destination_details', ['id'=>$datas->id])}}">link</a></td>
                                    <td>{{$datas->title}}</td>
                                    <td>{{$datas->wheather}}</td>
                                    <td>{{$datas->desc}}</td>
                                    <td>{{$datas->created_at}}</td>
                                    <td>
                                            <ul>
                                                <li class="nav-item"><a href="" class="nav-link"> <i class="fas fa-trash"></i> </a></li>
                                                <li class="nav-item"><a href="" class="nav-link"> <i class="fas fa-pencil-alt"></i> </a></li>
                                                <li class="nav-item"><a href="" class="nav-link"> <i class="fa fa-eye"></i> </a></li>
                                            </ul>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="pagination-area">
                        <ul class="paginations">
                            <li class="page-item active">
                                <a href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#">3</a>
                            </li>
                        </ul>
                        <ul class="paginations-buttons">
                            <li>
                                <a href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14"
                                        viewbox="0 0 7 14">
                                        <path d="M0 7.00008L7 0L2.54545 7.00008L7 14L0 7.00008Z"></path>
                                    </svg>
                                    Prev
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Next
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="14"
                                        viewbox="0 0 7 14" fill="none">
                                        <path d="M7 7.00008L0 0L4.45455 7.00008L0 14L7 7.00008Z"></path>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection