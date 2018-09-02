<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class NotifyComposer
{
	protected $user;

	public function __construct()
	{
		$this->user = Auth::user();
	}

	/**
	 * Bind data to the view.
	 *
	 * @param View $view
	 *
	 * @return void
	 */
	public function compose(View $view)
	{
		if (Auth::check()) {
			$user = $this->user;
			$notifications = [];
			if ($user->unreadNotifications) {
				foreach ($user->unreadNotifications as $notification) {
					$notifications[] .= $notification->data[ 'message' ];
					$notification->markAsRead();
				}
			} else {
				$notifications = '';
			}
		} else {
			$notifications = '';
		}
		//dd($notifications);
		$view->with('notifications', $notifications);
	}
}
