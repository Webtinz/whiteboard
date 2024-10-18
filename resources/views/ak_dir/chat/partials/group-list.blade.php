
@forelse ($groupConversations as $groupId => $groupData)
<li>
    <a href="javascript: void(0);" class="fw-medium d-block chat-group-link" data-group-id="{{ $groupData['group']->id }}" data-group-name="{{ $groupData['group']->name }}" data-group-member-number="{{ $groupData['number_of_members'] }}">
        <div class="d-flex align-items-center">
            <div class="avatar-sm">
                <span
                    class="avatar-title bg-light text-muted font-size-14 rounded-circle">
                    <i class="mdi mdi-account-group"></i>
                </span>
            </div>
            <div class="ms-3 chat-text">
                {{ $groupData['group']->name }}
            </div>
        </div>
    </a>
</li><!-- end li -->
@empty
<li>
    <a href="#" class="fw-medium d-block"
        style="background: rgb(241, 180, 76) !important; color: #fff">
        <div class="d-flex align-items-center">
            <div class="avatar-sm">
                <span
                    class="avatar-title bg-light text-muted font-size-16 rounded-circle">
                    <i class="mdi mdi-alert"></i>
                </span>
            </div>
            <div class="ms-3 chat-text">
                <span class="alert warning">No group yet</span>
            </div>
        </div>
    </a>
</li><!-- end li -->
@endforelse