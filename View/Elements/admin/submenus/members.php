<tr>
  <th>会員管理メニュー</th>
  <td>
    <ul class="cleafix">
      <li>
        <?php $this->bcBaser->link('会員一覧', array('controller' => 'mypages', 'action' => 'index')) ?>
      </li>
      <li>
        <?php $this->bcBaser->link('新規登録', array('controller' => 'mypages', 'action' => 'add')) ?>
      </li>
      <li>
        <?php $this->bcBaser->link('Mylog', array('controller' => 'mylogs', 'action' => 'index')) ?>
      </li>
      <li>
        <?php $this->bcBaser->link('メール一斉送信', array('controller' => 'mypages', 'action' => 'broadcast_mail')) ?>
      </li>
    </ul>
  </td>
</tr>