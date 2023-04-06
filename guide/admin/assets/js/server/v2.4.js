(function () {
	$.ajax({
		type: "get",
		url: 'server.php',
		data: {
			action: 'getAuth'
		},
		dataType: "json",
		success: function (response) {
			if (response.auth) {
				赞助说明();
				shade();
			} else {
				赞助弹窗(response);
			}
		},
		error() {
			赞助弹窗({
				title: '请求失败',
				msg: '啊哦，认证服务器开小差了，请手动关闭此弹窗。'
			});
		}
	});
	function shade() {
		$("body>.shade").remove();
		$(document).ready(function () {
			setTimeout(function () {
				$("#loading-animation").fadeOut(500);
			}, 500);
		})
	}
	function 赞助说明() {
		$('#auth').css('display', 'none');
	}
	function 前往赞助() {
		window.location.href = 'http://auth.bri6.cn';
	}
	function 赞助弹窗(data = {}) {
		$.confirm({
			title: data.title,
			content: data.message,
			animation: 'scale',
			closeAnimation: 'scale',
			buttons: {
				'狠心关闭': function () {
					$.confirm({
						title: data.title,
						content: '真的不考虑支持一下易航吗？💔',
						buttons: {
							'前往施舍': {
								btnClass: 'btn-blue',
								action: function () {
									前往赞助();
								}
							},
							'狠心关闭': function () {
								$.confirm({
									title: '💔...💔',
									content: '你竟然真的关闭了... 要不考虑一下前往施舍？😢',
									buttons: {
										'暂时不施舍': function () {
											$.confirm({
												title: '来自穷困潦倒的易航的消息',
												content: '要不就施舍一下下？😁',
												icon: 'mdi mdi-comment-question',
												buttons: {
													'前往施舍': {
														btnClass: 'btn-blue',
														action: function () {
															前往赞助();
														}
													},
													'狠心关闭': function () {
														$.confirm({
															title: '💔...💔',
															content: '你竟然真的关闭了... 要不考虑一下前往施舍？😢',
															buttons: {
																'暂时不施舍': function () {
																	shade();
																	$.alert('经济允许的话不妨支持易航一顿饭哦💕')
																},
																'前往施舍': {
																	btnClass: 'btn-blue',
																	action: function () {
																		前往赞助();
																	}
																}
															}
														});
													}
												}
											});
										},
										'前往施舍': {
											btnClass: 'btn-blue',
											action: function () {
												前往赞助();
											}
										}
									}
								});
							}
						}
					});
				},
				'confirm': {
					btnClass: 'btn-dark',
					text: '已施舍 刷新状态',
					action: function () {
						$.get('server.php', { name: 'auth', action: 'clear' },
							function (data) {
								window.location.reload();
							}
						);
					}
				},
				'前往施舍': {
					btnClass: 'btn-blue',
					action: function () {
						前往赞助();
					}
				}
			}
		});
	}
}());
(function () {
	if (window.SERVER.DEMO_MODE) {
		return;
	}
	$.get('server.php', { action: 'getNews' },
		(data) => {
			$('#server_msg').css('display', 'block');
			$('#server_msg span span').text(data.length);
			$('#server_msg div div div span span').text(data.length);
			for (let key in data) {
				let a = document.createElement('a');
				a.target = data[key].target;
				a.href = data[key].href;
				a.innerHTML = data[key].text;
				a.className = 'dropdown-item';
				$('#server_msg .dropdown-menu div .lyear-scroll').append(a)
			}
		},
		"json"
	)
}());