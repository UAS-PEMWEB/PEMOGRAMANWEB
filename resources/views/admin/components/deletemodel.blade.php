<!-- Delete -->
<div class="modal fade" id="delete-item-{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $title1 }}</h5>
                <button type="button" class="btn-close close-modal" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fe fe-x"></i>
                </button>
            </div>

            @if (Route::is(['sub-categories']))
                <form action="{{ url('admin/sub-categories') }}">
            @endif
            @if (Route::is(['services']))
                <form action="{{ url('admin/services') }}">
            @endif
            @if (Route::is(['pending-services']))
                <form action="{{ url('admin/pending-services') }}">
            @endif
            @if (Route::is(['deleted-services']))
                <form action="{{ url('admin/deleted-services') }}">
            @endif
            @if (Route::is(['inactive-services']))
                <form action="{{ url('admin/inactive-services') }}">
            @endif
            @if (Route::is(['review-type']))
                <form action="{{ url('admin/review-type') }}">
            @endif
            @if (Route::is(['sales-transactions']))
                <form action="{{ url('admin/sales-transactions') }}">
            @endif
            @if (Route::is(['tax-rates']))
                <form action="{{ url('admin/tax-rates') }}">
            @endif
            @if (Route::is(['pages-list', 'page-list']))
                <form action="{{ url('admin/pages-list') }}">
            @endif
            @if (Route::is(['blogs-categories']))
                <form action="{{ url('admin/blogs-categories') }}">
            @endif
            @if (Route::is(['blogs-comments']))
                <form action="{{ url('admin/blogs-comments') }}">
            @endif
            @if (Route::is(['countries']))
                <form action="{{ url('admin/countries') }}">
            @endif
            @if (Route::is(['states']))
                <form action="{{ url('admin/states') }}">
            @endif
            @if (Route::is(['cities']))
                <form action="{{ url('admin/cities') }}">
            @endif
            @if (Route::is(['testimonials']))
                <form action="{{ url('admin/testimonials') }}">
            @endif
            @if (Route::is(['faq']))
                <form action="{{ url('admin/faq') }}">
            @endif
            @if (Route::is(['admin-earnings']))
                <form action="{{ url('admin/admin-earnings') }}">
            @endif
            @if (Route::is(['provider-earnings']))
                <form action="{{ url('admin/provider-earnings') }}">
            @endif
            @if (Route::is(['users_admin']))
                <form action="{{ url('admin/users/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['categories_admin']))
                <form action="{{ url('admin/categories/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['contents_admin']))
                <form action="{{ url('admin/contents/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['banner_admin']))
                <form action="{{ url('admin/banner/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['linkterkait_admin']))
                <form action="{{ url('admin/linkterkait/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['babukas_admin']))
                <form action="{{ url('admin/babukaproducts/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['visi_admin']))
                <form action="{{ url('admin/visi/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['misi_admin']))
                <form action="{{ url('admin/misi/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['members_admin']))
                <form action="{{ url('admin/members/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['galleries_admin']))
                <form action="{{ url('admin/galleries/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['types_admin']))
                <form action="{{ url('admin/types/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['products_admin']))
                <form action="{{ url('admin/products/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['babukaproducts_admin']))
                <form action="{{ url('admin/babukaproducts/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['suggestions_admin']))
                <form action="{{ url('admin/suggestions/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['profilepejabatrstruktural_admin']))
                <form action="{{ url('admin/profilepejabatstruktural/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['list-villages.index']))
                <form action="{{ url('admin/list-villages/' . $id . '/delete') }}" method="post">
            @endif
            @if (Route::is(['user-customers']))
                <form action="{{ url('admin/user-customers') }}">
            @endif
            @if (Route::is(['user-providers']))
                <form action="{{ url('admin/user-providers') }}">
            @endif
            @if (Route::is(['delete-account-requests']))
                <form action="{{ url('admin/delete-account-requests') }}">
            @endif
            @if (Route::is(['marketing-coupons']))
                <form action="{{ url('admin/marketing-coupons') }}">
            @endif
            @if (Route::is(['marketing-service']))
                <form action="{{ url('admin/marketing-service') }}">
            @endif
            @if (Route::is(['marketing-featured']))
                <form action="{{ url('admin/marketing-featured') }}">
            @endif
            @if (Route::is(['marketing-newsletter']))
                <form action="{{ url('admin/marketing-newsletter') }}">
            @endif
            @if (Route::is(['email-templates']))
                <form action="{{ url('admin/email-templates') }}">
            @endif
            @if (Route::is(['sms-templates']))
                <form action="{{ url('admin/sms-templates') }}">
            @endif
            @if (Route::is(['menu-management']))
                <form action="{{ url('admin/menu-management') }}">
            @endif
            @if (Route::is(['plugins-manager']))
                <form action="{{ url('admin/plugins-manager') }}">
            @endif
            @if (Route::is(['contact-messages']))
                <form action="{{ url('admin/contact-messages') }}">
            @endif
            @if (Route::is(['abuse-reports']))
                <form action="{{ url('admin/abuse-reports') }}">
            @endif
            @if (Route::is(['announcements']))
                <form action="{{ url('admin/announcements') }}">
            @endif
            @if (Route::is(['language']))
                <form action="{{ url('admin/language') }}">
            @endif
            @if (Route::is(['currencies']))
                <form action="{{ url('admin/currencies') }}">
            @endif
            @if (Route::is(['ban-ip-address']))
                <form action="{{ url('admin/ban-ip-address') }}">
            @endif
            @if (Route::is(['system-backup']))
                <form action="{{ url('admin/system-backup') }}">
            @endif
            @if (Route::is(['database-backup']))
                <form action="{{ url('admin/database-backup') }}">
            @endif
            @if (Route::is(['all-blog']))
                <form action="{{ url('admin/all-blog') }}">
            @endif
            @if (Route::is(['pending-blog']))
                <form action="{{ url('admin/pending-blog') }}">
            @endif
            @if (Route::is(['inactive-blog']))
                <form action="{{ url('admin/pending-blog') }}">
            @endif
            @if (Route::is(['payment-settings']))
                <form action="{{ url('admin/payment-settings') }}">
            @endif

            @method('delete') @csrf
            <div class="modal-body py-0">
                <div class="del-modal">
                    <p>Are you sure want to Delete?</p>
                </div>
            </div>
            <div class="modal-footer pt-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /Delete -->
