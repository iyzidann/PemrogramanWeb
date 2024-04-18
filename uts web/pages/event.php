<?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Daftar Event') {
        registerEvent();
    }
?>

<!-- Event List -->
<section class="container">
    <div class="card card-full">
        <div class="card-body">
            <div class="flex justify-between items-center">
                <div class="flex flex-col">
                    <p class="text-title">Event</p>
                    <p class="text-subtitle">Cari event yang kamu suka dan ikuti eventnya sekarang juga.</p>
                </div>
                <a href="index.php?page=login" style="text-decoration: none; color: gray;">Login Admin</a>
            </div>
        </div>
    </div>
    <div class="flex flex-col margin-vertical-xl">
        <div class="flex justify-between items-center">
            <p class="text-title">Event List</p>
        </div>
        <div class="grid grid-auto">
            <?php
                $events = getEvents();

                while ($event = mysqli_fetch_array($events)) {
            ?>
                <div class="card card-full card-event">
                    <div class="card-body">
                        <div class="flex flex-col">
                            <p class="event-title"><?php echo $event['event_name'] ?></p>
                            <p class="event-price">Price: Rp<?php echo $event['event_price'] ?></p>
                            <p class="event-description-hidden"><?php echo $event['event_description'] ?></p>
                            <p class="event-id-hidden"><?php echo $event['event_id'] ?></p>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
    </div>
</section>

<!-- Modal Event Detail & Register Event -->
<div class="modal" style="display: none;">
    <div class="card card-lg">
        <div class="card-header">
            <p class="card-title">Detail Event</p>
        </div>
        <div class="card-body">
            <div class="flex flex-col">
                <p class="detail-event-title"></p>
                <p class="detail-event-price"></p>
            </div>
            <div class="margin-vertical-lg">
                <div class="flex flex-col">
                    <p class="text-title">Daftar Sekarang Juga</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="form-groups">
                        <input type="hidden" name="event_id" id="event_id">
                        <div class="form-group">
                            <label for="registrar_name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-input" id="registrar_name" name="registrar_name" placeholder="Masukkan nama lengkap" required>
                        </div>
                        <div class="form-group">
                            <label for="registrar_email" class="form-label">Email</label>
                            <input type="email" class="form-input" id="registrar_email" name="registrar_email" placeholder="Masukkan email" required>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="action" value="Daftar Event">
                            <button class="btn btn-danger">Batal</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function showEventModal(eventData) {
        document.querySelector('.detail-event-title').textContent = eventData.name + ' - RP' + eventData.price;
        document.querySelector('.detail-event-price').textContent = eventData.description;
        document.querySelector('#event_id').value = eventData.id;

        document.querySelector('.modal').style.display = 'block';
    };

    document.querySelectorAll('.card.card-full').forEach((card) => {
        card.addEventListener('click', function () {
            let eventName = this.querySelector('.event-title').textContent;
            let eventPrice = this.querySelector('.event-price').textContent.replace('Price: Rp', '');
            let eventDescription = this.querySelector('.event-description-hidden').textContent;
            let eventId = this.querySelector('.event-id-hidden').textContent;

            let eventData = {
                id: eventId,
                name: eventName,
                price: eventPrice,
                description: eventDescription
            };

            showEventModal(eventData);
        });
    });

    document.querySelector('.modal .btn-danger').addEventListener('click', function() {
        document.querySelector('.modal').style.display = 'none';
    });
</script>