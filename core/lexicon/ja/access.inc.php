<?php
/**
 * Access Japanese lexicon topic
 *
 * @language ja
 * @package modx
 * @subpackage lexicon
 * @author enogu http://www.kuroienogu.net/
 * @author honda http://kogus.org
 * @author Nick http://smallworld.west-tokyo.com
 * @author shimojo http://www.priqia.com/
 * @author yamamoto http://kyms.jp
 */
$_lang['access_category_management_msg'] = 'Manage User Group member access to Elements via Categories and optionally apply access policies.';
$_lang['access_category_err_ae'] = '指定されたカテゴリーのアクセス制御リストは既に存在します。';
$_lang['access_category_err_nf'] = 'カテゴリーのアクセス制御リストが見つかりませんでした。';
$_lang['access_category_err_ns'] = 'カテゴリーのアクセス制御リストが指定されていません。';
$_lang['access_category_err_remove'] = 'カテゴリーのアクセス制御リストの削除中にエラーが発生しました。';
$_lang['access_category_remove'] = 'カテゴリーアクセス権の削除';
$_lang['access_category_update'] = 'カテゴリーアクセス権の編集';
$_lang['access_confirm_remove'] = '本当にこのセキュリティアクセスコントロールコードを削除しますか？';
$_lang['access_context_management_msg'] = 'ユーザーグループメンバーをコンテキストとオプションアクセスポリシーへアクセス可能にする';
$_lang['access_context_err_ae'] = '指定されたコンテキストへのアクセス制御リストは既に存在します。';
$_lang['access_context_err_nf'] = 'コンテキストのアクセス制御リストが見つかりませんでした。';
$_lang['access_context_err_ns'] = 'コンテキストのアクセス制御リストが指定されていません。';
$_lang['access_context_err_remove'] = 'コンテキストのアクセス制御リストの削除中にエラーが発生しました。';
$_lang['access_context_remove'] = 'コンテキストアクセス権の削除';
$_lang['access_context_update'] = 'コンテキストアクセス権の編集';
$_lang['access_err_ae'] = 'アクセス制御リストは既に存在しています';
$_lang['access_err_create_md'] = 'アクセス制御リストを生成できません。データが消失しています';
$_lang['access_err_nf'] = 'アクセス制御リストを特定できませんでした';
$_lang['access_err_remove'] = 'アクセス制御リスト削除中のエラー';
$_lang['access_err_save'] = 'アクセス制御リスト保存中のエラー';
$_lang['access_grid_empty'] = '表示するアクセス制御リストが存在しません';
$_lang['access_grid_paginate'] = '{0} - {1} 中 {2}のアクセス制御リストを表示';
$_lang['access_permissions'] = 'アクセス許可';
$_lang['access_permissions_add_document_group'] = 'ドキュメントグループを作成';
$_lang['access_permissions_add_user_group'] = 'ユーザーグループを作成';
$_lang['access_permissions_documents_in_group'] = '<strong>グループ内ドキュメント:</strong> ';
$_lang['access_permissions_documents_tab'] = 'ドキュメントグループの設定を一覧することができます。グループの作成・リネーム・削除もここで操作します。 また、ドキュメントがどのグループに属しているかを閲覧することもできます(ドキュメント名を表示するには、idの上にマウスポインタを乗せてください)。 ドキュメントをグループに追加したり、グループから削除するには、ドキュメントを直接編集してください。';
$_lang['access_permissions_document_groups'] = 'ドキュメントグループ';
$_lang['access_permissions_introtext'] = 'ユーザーグループとドキュメントグループを管理します。ここでユーザーグループまたはドキュメントグループを作ると、ユーザ編集画面またはドキュメント編集画面で所属グループを選択できるようになります。また、ユーザーグループとドキュメントグループをここで関連付けることができます。つまり誰がどのドキュメントをという関連付けをここで行ないます。利用できる機能を制限・管理する「ロール」と違い、当機能ではコンテンツ(ドキュメント)対象の権限を管理します。<br />ロール管理とは区別されているため、同じユーザーグループ内に「強い権限を持つユーザー」や「限定された権限を持つユーザー」を自由に混在させることができます。<br />※「ツール」→「グローバル設定」→「詳細設定」の「アクセス権限設定の使用」を「いいえ」にすると、グループ設定を経由しない運用になります。信用できる少数のメンバーでシンプルにサイトを管理運用したい場合は参考にしてください。';
$_lang['access_permissions_links'] = 'グループリンク';
$_lang['access_permissions_links_tab'] = 'ドキュメントグループとユーザーグループを関連付けます。';
$_lang['access_permissions_no_documents_in_group'] = '無し';
$_lang['access_permissions_no_users_in_group'] = '無し';
$_lang['access_permissions_off'] = '<span class="warning">アクセス権限設定(グローバル設定→詳細設定)が無効になっています。</span> アクセス権限を有効にしない限り、全ての変更作業は無視されます。。';
$_lang['access_permissions_users_in_group'] = '<strong>グループ内ユーザー:</strong> ';
$_lang['access_permissions_users_tab'] = 'ユーザーグループの設定一覧を表示します。グループの作成・リネーム・削除もここで操作します。また、ユーザーがどのグループのメンバーになっているかを閲覧することができます。ユーザーをグループに追加したり、グループから削除するには、個々のユーザー設定を直接編集してください。<br />※管理者(ロールID 1が割り当てられているユーザー)は常に全てのドキュメントにアクセスすることができるため、管理者をグループに追加する必要はありません。';
$_lang['access_permissions_user_group'] = 'ユーザーグループ:';
$_lang['access_permissions_user_groups'] = 'ユーザーグループ:';
$_lang['access_permissions_user_group_access'] = 'Resource Groups this User Group has access to:';
$_lang['access_permissions_user_message'] = 'ユーザーが所属するグループを選択できます。<br>ユーザーグループのリストはドラッグ&ドロップで並べ替えることができます。一番上(ランク0)のユーザーグループがこのユーザーのプライマリーグループとなります。この設定はダッシュボードの表示内容などに影響を与えます。';
$_lang['access_permission_denied'] = 'このドキュメントにアクセスする権限がありません。';
$_lang['access_permission_parent_denied'] = 'ここにドキュメントを作成する権限がありません';
$_lang['access_policy_err_nf'] = 'アクセスポリシーが見つかりませんでした。.';
$_lang['access_policy_err_ns'] = 'アクセスポリシーが指定されていません。';
$_lang['access_policy_grid_empty'] = '表示するポリシーがありません。';
$_lang['access_policy_grid_paginate'] = '{0} - {1} 中 {2}のポリシーを表示';
$_lang['access_resourcegroup_management_msg'] = 'ユーザーグループに対して、リソースグループへのアクセス権および設定してください。';
$_lang['access_rgroup_err_ae'] = '指定されたリソースグループのアクセス制御リストは既に存在します。';
$_lang['access_rgroup_err_nf'] = 'リソースグループのアクセス制御リストが見つかりませんでした。';
$_lang['access_rgroup_err_ns'] = 'リソースグループのアクセス制御リストが指定されていません。';
$_lang['access_rgroup_err_remove'] = 'リソースグループのアクセス制御リストの削除中にエラーが発生しました。';
$_lang['access_rgroup_remove'] = 'リソースグループアクセス権の削除';
$_lang['access_rgroup_update'] = 'リソースグループアクセス権の編集';
$_lang['access_source_remove'] = 'メディアソースアクセス権の削除';
$_lang['access_source_update'] = 'メディアソースアクセス権の編集';
$_lang['access_to_contexts'] = 'コンテキストへアクセス';
$_lang['access_to_resource_groups'] = 'リソースグループへアクセス';
$_lang['access_type_err_ns'] = 'ターゲットタイプもしくはIDタイプが特定されていません';
$_lang['acl_add'] = '許可グループを追加';
$_lang['authority'] = '特権レベル';
$_lang['authority_err_ns'] = 'ミニマムロールを指定してください。';
$_lang['category'] = 'カテゴリー';
$_lang['category_add'] = 'カテゴリーを追加';
$_lang['filter_by_context'] = 'コンテキストで絞り込む';
$_lang['filter_by_policy'] = 'ポリシーで絞り込む';
$_lang['filter_by_resource_group'] = 'リソースグループで絞り込む';
$_lang['filter_by_category'] = 'カテゴリーで絞り込む';
$_lang['filter_by_source'] = 'メディアソースで絞り込む';
$_lang['no_policy_option'] = ' (ポリシーなし) ';
$_lang['permissions_in_policy'] = '選択されたポリシーに対するパーミッション';
$_lang['resource_group'] = 'リソースグループ';
$_lang['resource_group_add'] = 'リソースグループを追加';
$_lang['resource_group_access_remove'] = 'リソースの削除';
$_lang['resource_group_access_remove_confirm'] = 'リソースグループからリソースを削除しますか？';
$_lang['resource_group_create'] = 'リソースグループを作成';
$_lang['resource_group_err_ae'] = '同名のリソースグループが存在します。';
$_lang['resource_group_err_create'] = 'リソースグループの作成中にエラーが発生しました。';
$_lang['resource_group_err_nf'] = 'リソースグループが見つかりませんでした。';
$_lang['resource_group_err_ns'] = 'リソースグループが指定されていません。';
$_lang['resource_group_err_remove'] = 'リソースグループの削除中にエラーが発生しました。';
$_lang['resource_group_remove'] = 'リソースグループの削除';
$_lang['resource_group_remove_confirm'] = 'このリソースグループを削除しますか？';
$_lang['resource_group_resource_err_ae'] = '指定されたリソースは既にリソースグループに存在します。';
$_lang['resource_group_resource_err_create'] = 'リソースをリソースグループへ配置中にエラーが発生しました。';
$_lang['resource_group_resource_err_nf'] = '指定されたリソースはリソースグループに含まれていません。';
$_lang['resource_group_resource_err_remove'] = 'リソースをリソースグループから削除中にエラーが発生しました。';
$_lang['resource_group_untitled'] = '無名のリソースグループ';
$_lang['resource_group_update'] = 'リソースグループの編集';
$_lang['roles_msg'] = 'A role is, by definition, a position or status one holds within a certain situation. They can be used to group Users into a position or status within a User Group. Roles in MODX also have what is called "Authority". This is a number value that can be any valid integer. Authority levels are "inheritable downward", in the sense that a Role with Authority 1 will inherit any and all Group Policies assigned to itself, and to any Roles with higher Authority level than 1.';
$_lang['source_add'] = 'Add Media Source';
$_lang['user_group_category_access'] = 'カテゴリーのアクセス';
$_lang['user_group_category_access_msg'] = 'エレメントが所属するカテゴリーへのアクセス権を加えることができます。';
$_lang['user_group_category_authority_desc'] = 'The minimum Role that will have access to the Permissions in the selected Policy for this context. Roles with stronger Authority (lower numbers) will inherit this access as well. Most situations can leave this at "Member".';
$_lang['user_group_category_category_desc'] = 'The Category to grant access to.';
$_lang['user_group_category_context_desc'] = 'The Context to target for Elements with the above Category associated to them.';
$_lang['user_group_category_err_ae'] = 'User Group already has access to that Category.';
$_lang['user_group_category_policy_desc'] = 'The Policy to apply to this Context with Elements in the Category for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_category_remove_confirm'] = 'Are you sure you want to remove this Category from this User Group?';
$_lang['user_group_context_access'] = 'コンテキストのアクセス';
$_lang['user_group_context_access_msg'] = 'ユーザーグループにコンテキストへのアクセス権を加えることができます。';
$_lang['user_group_context_authority_desc'] = 'The minimum Role that will have access to the Permissions in the selected Policy for this context. Roles with stronger Authority (lower numbers) will inherit this access as well. Most situations can leave this at "Member".';
$_lang['user_group_context_context_desc'] = 'The Context to grant access to.';
$_lang['user_group_context_policy_desc'] = 'The Policy to apply to this Context for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_context_err_ae'] = 'ユーザーグループは既にコンテキストへのアクセス権を持っています。';
$_lang['user_group_context_remove_confirm'] = 'ユーザーグループからコンテキストを削除しますか？';
$_lang['user_group_resourcegroup_access'] = 'リソースグループのアクセス';
$_lang['user_group_resourcegroup_access_msg'] = 'ユーザーグループにリソースグループへのアクセス権を加えることができます。';
$_lang['user_group_resourcegroup_authority_desc'] = 'The minimum Role that will have access to the Permissions in the selected Policy for this context. Roles with stronger Authority (lower numbers) will inherit this access as well. Most situations can leave this at "Member".';
$_lang['user_group_resourcegroup_context_desc'] = 'The Context to target for items with the above Resource Group associated to them.';
$_lang['user_group_resourcegroup_err_ae'] = 'ユーザーグループは既にそのリソースグループへのアクセス権があります。';
$_lang['user_group_resourcegroup_policy_desc'] = 'The Policy to apply to this Context with Resources in the Resource Group for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_resourcegroup_remove_confirm'] = 'ユーザーグループからこのリソースグループを削除しますか？';
$_lang['user_group_resourcegroup_resource_group_desc'] = 'アクセスを許可するリソースグループを指定します。';
$_lang['user_group_source_access'] = 'メディアソースのアクセス';
$_lang['user_group_source_access_msg'] = 'ユーザーグループにメディアソースへのアクセス権を加えることができます。';
$_lang['user_group_source_authority_desc'] = 'このポリシーを適用する最低限のロール。より強い権限を持ったロール(特権レベルの数字が小さいもの)はこのポリシーを継承します。多くの場合、この項目はメンバー(特権レベル9999)によるアクセスの制限に使われるでしょう。';
$_lang['user_group_source_err_ae'] = 'User Group already has access to that Media Source.';
$_lang['user_group_source_policy_desc'] = 'The Policy to apply to this Media Source for this User Group. This will grant all Users in this User Group with the selected minimum Role all the Permissions in the Policy.';
$_lang['user_group_source_remove_confirm'] = 'Are you sure you want to remove this Media Source from this User Group?';
$_lang['user_group_source_source_desc'] = 'The Media Source to grant access to.';
$_lang['user_group_user_access_msg'] = 'このユーザーグループへ加えるユーザーを選択してください。';
