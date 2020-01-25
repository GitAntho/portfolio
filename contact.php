
            <section id="contact">
                <h3>Contact</h3>

                <form action="contact_request.php" method="post">
                    <div class="label">
                        <label for="name">Nom *</label>
                    </div>
                    <input type="text" name="name" id="name" required>

                    <div class="label">
                        <label for="mail">Email *</label>
                    </div>
                    <input type="email" name="email" id="email" required>

                    <div class="label">
                        <label for="entreprise">Entreprise *</label>
                    </div>
                    <input type="text" name="entreprise" id="entreprise" required>

                    <div class="label">
                        <label for="message">Message *</label>
                    </div>
                    <textarea name="message" id="message" rows="10" required></textarea>

                    <input type="submit" value="Envoyer" id="submit" name="submit">
                </form>
            </section>
