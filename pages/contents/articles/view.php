<?php
/**
 * Buddyexpress Desk
 *
 * @package   Bdesk
 * @author    Buddyexpress Core Team <admin@buddyexpress.net
 * @copyright 2014 BUDDYEXPRESS NETWORKS.
 * @license   Buddyexpress Public License http://www.buddyexpress.net/Licences/bpl/ 
 * @link      http://labs.buddyexpress.net/bdesk.b
 */
$article = $params['article'];
$owner = get_user_by_uid($article['owner_id']);
echo '<h2>'.$article['title'].'</h2>';
echo '<p>'.generateTitle($article['article']).'</p>';
echo '<div class="posted" style="font-size: 12px;color: #4E4E4E;">';
echo 'Posted by: '.$owner['name'].' '.$article['time'].'</div>';
