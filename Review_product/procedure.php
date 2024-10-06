Procedure submitReview(user-id: integer ; item-id: integer ; review-text: string);
var
    review = record
        user-id : integer;
        item-id : integer;
        review-text : string;
    end;
begin
    if (item-id exists in product database) then
        review.user-id := user-id;
        review.item-id := item-id;
        review.review-text := review-text;
    else
        write('Error: Product not found.');
    end if;
end;
