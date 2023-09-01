										<!--begin::Tab content-->
										<div class="tab-content">
											<!--begin::Tab panel-->
											<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
												<!--begin::Items-->
												<div class="scroll-y mh-325px my-5 px-8">
													<!--begin::Item-->
                                                    @foreach ($notifications  as $notification)
													<div class="d-flex flex-stack py-4">
														<!--begin::Section-->
														<div class="d-flex align-items-center">
															<!--end::Symbol-->
															<!--begin::Title-->
                                                            <div class="mb-0 me-2">
																<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">{{ $notification->data['post_id'] }}</a>
																<div class="text-gray-400 fs-7">{{ $notification->data['body'] }}</div>
															</div>
															<!--end::Title-->
														</div>
														<!--end::Section-->
														<!--begin::Label-->
														<span class="badge badge-light fs-8">{{ $notification->created_at->diffForHumans() }}</span>
														<!--end::Label-->
													</div>
                                                    @endforeach
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Tab panel-->
										</div>
										<!--end::Tab content-->
